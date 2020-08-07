<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Pronostiques;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class PronostiquesController extends BaseController
{

    public function index() {

        $last_articles = Articles::all()->chunk(3);
        $last_five_articles = Articles::all()->chunk(4);

         return view('pronostiques', ['last_five_articles'=>$last_five_articles[0],'last_articles' => $last_articles[0]]);
    }

    public function show(Pronostiques $pronostique){

        $user = Auth::user();
        $last_articles = Articles::all()->chunk(3);
        $last_five_articles = Articles::all()->chunk(4);

        if($pronostique->type == "foot"){
            if($user->football === 1){
                return view("pronostique", ['pronotisque'=>$pronostique, 'last_articles' => $last_articles[0]]);
            } else {
                return redirect()->route('home')->with('status', 'no_sub');
            }

        } elseif($pronostique->type == "bascket") {
            if($user->basket === 1){
                return view("pronostique", ['pronotisque'=>$pronostique, 'last_articles' => $last_articles[0]]);

            } else {
                return redirect()->route('home')->with('status', 'no_sub');
            }
        }  else {
            if($user->tennis === 1){
                return view("pronostique", ['pronotisque'=>$pronostique, 'last_articles' => $last_articles[0]]);

            } else {
                return redirect()->route('home')->with('status', 'no_sub');
            }
        }
    }



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
