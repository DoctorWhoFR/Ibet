@extends('layouts.app')

@section('content')
    <!-- preloader -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- end preloader -->

    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <div class="row">
                <div class="col s3">
                    @if(Auth::user())

                    <div class="content-left">
                        <a href="#slide-out" data-activates="slide-out" class="sidebar"><i class="fas fa-bars"></i></a>
                    </div         >
                    @endif

                </div>
                <div class="col s6">
                    <div class="content-center">
                        <a href="{{route('home')}}"><h1><span>I</span>Bet</h1></a>
                    </div>
                </div>

                <div class="col s3">
                    <div class="content-right">
                        <a href="#modal1" class="modal-trigger"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end navbar -->

    @if(Auth::user())
    <!-- sidebar -->
    <div class="sidebar-panel">
        <ul id="slide-out" class="collapsible side-nav">
            <li>
                <a href="{{route('home')}}">Accueil</a>
            </li>
            <li>
                <a href="{{route('pronostiques')}}">Pronostiques</a>
            </li>
            <li>
                <a href="{{route('logout')}}">Logout</a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
   @endif
    <!-- search -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <form>
                <input type="text" placeholder="Search">
                <button class="button"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- end search -->

    <!-- menu top -->
    <div class="menu-top">
        <div class="container-fluid">
            <ul>
                <li>
                    <a href="{{route('home')}}">Accueil</a>
                </li>
                <li>
                    <a href="{{route('pronostiques')}}">Pronostiques</a>
                </li>
                <li>
                    <a href="{{route('shop')}}">Boutiques</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end menu top -->
    <!-- slide -->
    <div class="slide">
        <div class="slide-show owl-carousel owl-theme">
            @foreach($last_articles as $article)
                <div class="slide-content">
                    <div class="mask" ></div>
                    <a href="{{route('news.show', ['article'=>$article->id])}}"><img src="{{asset('images/slider1.jpg')}}" alt=""></a>

                    <div class="caption">
                        <a href="{{route('news.show', ['article'=>$article->id])}}"><span style="text-transform: uppercase">{{$article->type}}</span>
                        <h4>{{$article->titre}}</h4>
                            <p>{{substr($article->contenu, 1, 60)}}..</p></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- end slide -->


    <div class="matches segments-page ">
        <div class="container">

            <div class="card " >
                <div class="card-body " style="padding: 30px;" >
                    <h5 class="card-title ">{{__('Bienvenue sur Ibet')}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted ">{{__('Le meilleur site de Paris Sportif')}}</h6>

                    @if(\Illuminate\Support\Facades\Session::get('success') == "Payment success")
                        <p><strong>Bravo!</strong> Payement effectué avec succès! Vous avez maintenant accès au pronostiques du packs que vous avez achetez
                            <a href="{{route('pronostiques')}}">ici</a></p>


                    @endif
               </div>
            </div>

            <div class="wrap-content last-win" style="">
                <div class="row">
                    <h1 class="center-align" style="margin-bottom: 30px;"> Victoire !</h1>
                </div>
                <div class="row ">
                    <div class="col s8 ">
                        <div class="content-left" style="text-transform: uppercase; font-family: 'Montserrat';">
                            <ul>
                                <li style="padding-bottom: 15px;"><a href="club-details.html"><i class="fas fa-futbol"></i>{{\App\Pronostiques::where('status', 'finished')->get()->last()->equipe_defence}}</a></li>
                                <li><a href="club-details.html" style="color: hotpink;"><i class="fas fa-futbol"></i>{{\App\Pronostiques::where('status', 'finished')->get()->last()->equipe_attack}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right" style="color:white;">
                            <ul style="padding-top: 20px;">
                                <li style="font-size: 30px; padding-top: 30px;color: white;"><h4 style="color:white;" class="badge">Score:</h4>{{\App\Pronostiques::where('status', 'finished')->get()->last()->final_equipedefence_score}} | {{\App\Pronostiques::where('status', 'finished')->get()->last()->final_equipeattack_score}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s5"></div>
                    <div class="col s3 " style="">
                        <div class="center-align" style="text-transform: uppercase; font-family: 'Montserrat';">
                            <ul>
                                <li style="padding-top: 30px;"><a href=""><p style="background-color: green;
font-size: 35px;
width: 90px;
padding: 3px;
color: white;" class="center-align" >x{{\App\Pronostiques::where('status', 'finished')->get()->last()->cote_moyen}}</p></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <!-- matches -->
    <div class="matches segments-page">
        <div class="container">
            <div class="wrap-title">
                <h4>Derniers Pronostiques</h4>
            </div>
                @php
                    $foot = \App\Pronostiques::where('type', '=', "foot")->get()->last();
                    $bascket = \App\Pronostiques::where('type', '=', "bascket")->get()->last();
                    $tennis = \App\Pronostiques::where('type', '=', "tennis")->get()->last();
                @endphp
                <div class="wrap-content">
                    <div class="row">
                        <div class="col s8">
                            <div class="content-left">
                                <ul>

                                    <li><a href="club-details.html"><h4>Pack Foot</h4></a></li>
                                    <li><a href="club-details.html"><i class="fas fa-futbol"></i>{{$foot->equipe_defence}}</a></li>
                                    <li><a href="club-details.html"><i class="fas fa-shield-alt"></i>{{$foot->equipe_attack}}</a></li>
                                    <li><a href="club-details.html">
                                            <div class="progress">
                                                <div class="determinate" style="width: {{$foot->confiance}}%"><span class="center-align" style="padding-left:20px; color:white; font-family: Montserrat">{{$foot->confiance}}%</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="content-right">
                                <ul>
                                    <li style="padding-bottom:40px;">Cote:<span class="badge" style="background-color: black;color:white">{{$foot->cote_moyen}}</span></li>
                                    <li id="timer.{{$foot->id}}">Not Started</li>
                                </ul>

                            </div>
                        </div>
                        <div class="col s4" style="margin-top: 60px; ">
                            <div class="content-right">
                                <a href="{{route('pronostiques')}}" class="button button-green">VOIR</a>

                            </div>
                        </div>
                    </div>
                </div>

            <div class="wrap-content">
                <div class="row">
                    <div class="col s8">
                        <div class="content-left">
                            <ul>

                                <li><a href="club-details.html"><h4>Pack Bascket</h4></a></li>
                                <li><a href="club-details.html"><i class="fas fa-futbol"></i>{{$bascket->equipe_defence}}</a></li>
                                <li><a href="club-details.html"><i class="fas fa-futbol"></i>{{$bascket->equipe_attack}}</a></li>
                                <li><a href="club-details.html">
                                        <div class="progress">
                                            <div class="determinate" style="width: {{$bascket->confiance}}%"><span class="center-align" style="padding-left:20px; color:white; font-family: Montserrat">{{$bascket->confiance}}%</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                                <li style="padding-bottom:40px;">Cote:<span class="badge" style="background-color: black;color:white">{{$bascket->cote_moyen}}</span></li>
                                <li id="timer.{{$bascket->id}}">Not Started</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col s4" style="margin-top: 60px; ">
                        <div class="content-right">
                            <a href="{{route('pronostiques')}}" class="button button-green">VOIR</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-content">
                <div class="row">
                    <div class="col s8">
                        <div class="content-left">
                            <ul>

                                <li><a href="club-details.html"><h4>Pack Tennis</h4></a></li>
                                <li><a href="club-details.html"><i class="fas fa-futbol"></i>{{$tennis->equipe_defence}}</a></li>
                                <li><a href="club-details.html"><i class="fas fa-futbol"></i>{{$tennis->equipe_attack}}</a></li>
                                <li><a href="club-details.html">
                                        <div class="progress">
                                            <div class="determinate" style="width: {{$tennis->confiance}}%"><span class="center-align" style="padding-left:20px; color:white; font-family: Montserrat">{{$tennis->confiance}}%</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                                <li style="padding-bottom:40px;">Cote:<span class="badge" style="background-color: black;color:white">{{$tennis->cote_moyen}}</span></li>
                                <li id="timer.{{$tennis->id}}">Not Started</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col s4" style="margin-top: 60px; ">
                        <div class="content-right">
                            <a href="{{route('pronostiques')}}" class="button button-green">VOIR</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- latest news -->
    <div class="latest-news segments">
        <div class="container">
            <div class="section-title">
                <h3>Latest News</h3>
            </div>
            @foreach(array_reverse($last_five_articles->toArray()) as $article)
                <div class="row">
                    <div class="col s5">
                        <div class="content-image">
                            <img src="{{asset('images/slider1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col s7">
                        <div class="content-text">
                            <span>{{substr($article['titre'], 1, 20)}}</span>

                            <a href="{{route('news.show', ['article'=>$article['id']])}}"><h5>{{substr($article['contenu'], 1, 50)}}..</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="button-load">
                <a href="news.html" class="see-all">Voir plus !</a>
            </div>
        </div>
    </div>
    <!-- end latest news -->


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <div class="content">
                        <h4>More</h4>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">Players</a></li>
                            <li><a href="">Standings</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col s6">
                    <div class="content">
                        <h4>Follow We</h4>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li><a href=""><i class="fab fa-twitter"></i>Twitter</a></li>
                            <li><a href=""><i class="fab fa-instagram"></i>Instagram</a></li>
                            <li><a href=""><i class="fab fa-google"></i>Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <p>Copyright © All Right Reserved</p>
            </div>
        </div>
    </footer>

@endsection
@section('scripts')


    <script>


        var timer{{$foot->id}} =
            countdown(
                new Date("{{$foot->date_fin}}"),
                function(ts) {
                    document.getElementById("timer.{{$foot->id}}").innerHTML = ts.toHTML("strong");
                },
                countdown.HOURS|countdown.MINUTES);

        var timer{{$bascket->id}} =
            countdown(
                new Date("{{$bascket->date_fin}}"),
                function(ts) {
                    document.getElementById("timer.{{$bascket->id}}").innerHTML = ts.toHTML("strong");
                },
                countdown.HOURS|countdown.MINUTES);

        var timer{{$tennis->id}} =
            countdown(
                new Date("{{$tennis->date_fin}}"),
                function(ts) {
                    document.getElementById("timer.{{$tennis->id}}").innerHTML = ts.toHTML("strong");
                },
                countdown.HOURS|countdown.MINUTES);
   </script>

@endsection
