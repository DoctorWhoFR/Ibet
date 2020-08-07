<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Pronostiques;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $last_articles = Articles::all();
        $last_five_articles = Articles::all()->chunk(4);
        $last_foots = Pronostiques::where(["type" => "foot", 'status'=>'not_started'])->get()->chunk(3);

            return view('home', ['last_five_articles'=>$last_five_articles[0],'last_articles' => $last_articles, 'last_foots'=>$last_foots[0]]);
    }

    public function shop(){

        $last_articles = Articles::all()->chunk(3);
        $last_five_articles = Articles::all()->chunk(4);

        return view("shop", ['last_articles'=>$last_articles[0], 'last_five_articles'=>$last_five_articles[0]]);
    }

    public function newsShow(Articles $article){

        $last_articles = Articles::all()->chunk(3);
        $last_five_articles = Articles::all()->chunk(4);
        return view('article', ['articled'=>$article, 'last_articles'=>$last_articles[0], 'last_five_articles'=>$last_five_articles[0]]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
