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
                        <a href="{{route('login')}}"><h1><span>I</span>Bet</h1></a>
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
                <div class="col-12 center-align" style="margin-bottom: 30px;">
                        <div class="card " >
                            <div class="card-body " style="padding: 30px;" >
                                <h5 class="card-title ">{{__('Bienvenue sur Ibet')}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">{{__('Le meilleur site de Paris Sportif')}}</h6>
                            </div>
                        </div>
                </div>

                <div class="col-12">
                    <div class="signin-contents">
                        <h4>{{__("Connection")}}</h4>
                        @if($errors->any())


                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <span class="card-title">Informations</span>
                                            @error('email')
                                            {{__('Ces informations ne correspondent pas à notre base de données')}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                M.toast({html: 'I am a toast!', classes: 'rounded'});
                            </script>
                        @endif
                        <form method="post" action="{{route('login')}}">
                            @csrf
                            <input type="email" placeholder="{{__('Email')}}" name="email" style="color:black;">
                            <input type="password" placeholder="{{__('Mots de passe')}}" name="password" style="color:black;">
                            <button class="button button-green"><i class="fa fa-send"></i>{{__("Connexion")}}</button>
                            <a class="button button-green" href="{{route("register")}}"><i class="fa fa-send"></i>{{__("S'enregistrer")}}</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end sign in -->

{{--    <div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
