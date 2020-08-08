@extends('layouts.app')

@section('content')
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <div class="row">
                <div class="col s3 ">
                    {{--                    <div class="content-left">--}}
                    {{--                        <a href="#slide-out" data-activates="slide-out" class="sidebar"><i class="fas fa-bars"></i></a>--}}
                    {{--                    </div>--}}
                </div>
                <div class="col s6">
                    <div class="content-center">
                        <a href="{{route('home')}}"><h1><span>I</span>Bet</h1></a>
                    </div>
                </div>
                <div class="col s3">
                    {{--                    <div class="content-right">--}}
                    {{--                        <a href="#modal1" class="modal-trigger"><i class="fas fa-search"></i></a>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div class="sidebar-panel" >
        <ul id="slide-out" class="collapsible side-nav">
            <li>
                <div class="user-view">
                    <img class="circle responsive-img" src="{{asset('images/author.png')}}" alt="">
                    <h5>John Doe</h5>
                    <span>Developer</span>
                </div>
            </li>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="matches.html">Matches</a>
            </li>
            <li>
                <a href="standings.html">Standings</a>
            </li>
            <li>
                <a href="stats.html">Stats</a>
            </li>
            <li>
                <a href="players.html">Players</a>
            </li>
            <li>
                <a href="news.html">News</a>
            </li>
            <li>
                <div class="collapsible-header">
                    Pages<span><i class="fas fa-circle"></i></span>
                </div>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="accordion.html">Accordion</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="sign-in.html">Sign In</a></li>
                        <li><a href="sign-up.html">Sign Up</a></li>
                        <li><a href="settings.html">Settings</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="index.html">Log Out</a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->

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

    <!-- sign in -->
    <div class="sign-in segments-page">
        <div class="container">
            <div class="row">
                <div class="col s12 center-align" style="margin-bottom: 30px;">
                    <div class="card " >
                        <div class="card-body " style="padding: 30px;" >
                            <h5 class="card-title p-5 ">{{__('Bienvenue sur Ibet')}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{__('Le meilleur site de Paris Sportif')}}</h6>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="signin-contents">
                        <h4>{{__("Connection")}}</h4>
                        <form method="post" action="{{route('register')}}">
                            @csrf
                            <input type="text" placeholder="{{__('Pseudo')}}" name="name" id="name" style="color:black;">
                            <input type="email" placeholder="{{__('Email')}}" name="email" id="email" style="color:black;">
                            <input type="password" placeholder="{{__('Mots de passe')}}" name="password" id="password" style="color:black;">
                            <input type="password" placeholder="{{__('Confirmation du mots de passe')}}" name="password_confirmation" id="password_confirmation" style="color:black;">
                            <button class="button button-green"><i class="fa fa-send"></i>{{__("S'enregistrer")}}</button>
                            <a class="button button-green" href="{{route('login')}}"><i class="fa fa-send"></i>{{__("Connexion")}}</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end sign in -->
@endsection
