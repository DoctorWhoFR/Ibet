<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Conbines;
use App\Http\Controllers\API\ArticlesAPIController;
use App\Pronostiques;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //




    public function index(){
        if(Auth::user()->is_admin != 0) {
            return view('admins');
        }
        return redirect()->home();
    }

    public function makeAdmins(User $user){
        if(Auth::user()->is_admin != 0){
            $user->is_admin = 1;
            $user->save();
            return redirect()->back();
        }
    }

    public function upgrade(User $user) {

        if($user->football == 0) {

            $user->football = 1;
            $user->save();

        } elseif($user->basket == 0){

            $user->basket = 1;
            $user->save();

        }  else {

            $user->tennis = 1;
            $user->save();

        }

        return redirect()->back();
    }

    public function delete(Articles $article){

        $am = new ArticlesAPIController();
        $am->destroy($article);

        return redirect()->back();

    }

    public function combines(Request $request){

        $conbine = Conbines::create($request->all());

        foreach ($request->all() as $item => $value) {

             if($item == "defaultpronostique" or strpos($item, "prono") !== false){
                 $prono = Pronostiques::find($value);
                 $prono->conbines_id = $conbine->id;
                 $prono->save();
            }
        }

        return redirect()->back();
    }



}
