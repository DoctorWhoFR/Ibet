<?php

namespace App\Http\Controllers;

use App\Coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConfigurationException;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }
    public function index()
    {
        return view('paywithpaypal');
    }



    public function payWithpaypal(Request $request, string $type)
    {
        $request->session()->put("under", $type);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        if($type === "pack"){

            if(!Session::has('coupons')){
                $item_1->setName('Ibet - Abonnement Foot') /** item name **/
                ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice(5); /** unit price **/
            }  else {

                $final = 5 - ((Session::get('coupons') * 5) / 100);

                $item_1->setName('Ibet - Abonnement Foot') /** item name **/
                ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice($final); /** unit price **/
            }


        } elseif($type==="pack2"){

            if(!Session::has('coupons')) {
                $item_1->setName('Ibet - Abonnement Foot + Bascket')/** item name **/
                ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice(15);
                /** unit price **/
            }  else {
                $final = 15 - ((Session::get('coupons') * 15) / 100);

                $item_1->setName('Ibet - Abonnement Foot + Bascket')/** item name **/
                ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice($final);
            }
        }  else {
            if(!Session::has('coupons')){
                $item_1->setName('Ibet - Abonnement Foot + Bascket + Tennis') /** item name **/
                ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice(25); /** unit price **/
            }  else {
                $final = 25 - ((Session::get('coupons') * 25) / 100);

                $item_1->setName('Ibet - Abonnement Foot + Bascket + Tennis')/** item name **/
                ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice($final);
            }

        }

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        if($type === "pack"){
            if(!Session::has('coupons')) {
                $amount->setCurrency('EUR')
                    ->setTotal(5);
            } else {
                $final = 5 - ((Session::get('coupons') * 5) / 100);

                $amount->setCurrency('EUR')
                    ->setTotal($final);
            }

        } elseif($type==="pack2"){
            if(!Session::has('coupons')) {
                $amount->setCurrency('EUR')
                    ->setTotal(15);
            } else {
                $final = 15 - ((Session::get('coupons') * 15) / 100);

                $amount->setCurrency('EUR')
                    ->setTotal($final);
            }
        }  else {
            if(!Session::has('coupons')) {
                $amount->setCurrency('EUR')
                    ->setTotal(25);
            } else {
                $final = 25 - ((Session::get('coupons') * 25) / 100);

                $amount->setCurrency('EUR')
                    ->setTotal($final);
            }
        }
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
        ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (PayPalConfigurationException $ex) {

            if (Config::get('app.debug')) {

                Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }

    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {

            Session::put('error', 'Payment failed');
            return Redirect::to('/');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            Session::put('success', 'Payment success');
            $user = Auth::user();

            if(Session::get('under') == 'pack2'){
                $user->football = 1;
                $user->basket = 1;
            } elseif(Session::get('under') == 'pack3') {
                $user->football = 1;
                $user->basket = 1;
                $user->tennis = 1;
            } else {
                $user->football = 1;
            }

            try {
                Coupons::where('code', '=', Session::get('coupons'))->get()[0]->delete();

                Session::remove('coupons');
            } catch (\Exception $e){

            }

            // ajout du temps d'abonnement ((60seconds*60minutes)*24h)*31 = 2 678 400seconds = 1 mois de 31j
            $user->expiration = time()+2678400;
            $user->save();
            return Redirect::to('/');

        }

        Session::put('error', 'Payment failed');
        return Redirect::to('/');

    }

    public function payWithCoupon(Request $request){
        if($request->input('coupons') != null){
            $coupon = Coupons::where('code', '=', $request->input('coupons'))->get();
            if($coupon != null){
                try {
                    Session::put('coupons', $coupon[0]->reduction);

                } catch (\Exception $e)     {
                    return \redirect()->back();
                }
                return redirect()->back();
            } else {
                return redirect()->back();
            }

        }   else {
            return redirect()->back();
        }

    }
}
