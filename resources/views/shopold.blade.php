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
                    <div class="content-left">
                        <a href="#slide-out" data-activates="slide-out" class="sidebar"><i class="fas fa-bars"></i></a>
                    </div>
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

    <!-- sidebar -->
    <div class="sidebar-panel">
        <ul id="slide-out" class="collapsible side-nav">
            <li>
                <div class="user-view">
                    <img class="circle responsive-img" src="https://avatars.dicebear.com/api/male/{{Auth::user()->name}}.svg?mood[]=happy" alt="">
                    <h5>{{Auth::user()->name}}</h5>
                    <span><strong style="font-family: Montserrat"><a href="{{route('shop')}}">Abonnement</a></strong> <br> <strong>Foot: <i class="fas fa-circle" @if(Auth::user()->football === 1 )style="color: green;" @else style="color: red;" @endif></i> </strong><br><strong>Tennis: <i class="fas fa-circle" @if(Auth::user()->tennis === 1 )style="color: green;" @else style="color: red;" @endif></i> </strong><br><strong>Bascket: <i class="fas fa-circle" @if(Auth::user()->basket === 1 )style="color: green;" @else style="color: red;" @endif></i> </strong><br></span>
                </div>
            </li>
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
    <div class="matches segments-page">
        <div class="container">
            <div class="wrap-title">
                <h4>Boutiques</h4>
                <h6>Payement par Paypal (uniquement)</h6>
            </div>
            <!-- end menu top -->
            <div class="wrap-content">
                <div class="row">
                    <div class="col s8">
                        <div class="content-left">
                            <ul>

                                <li><a ><h4>Pack Foot</h4></a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>5 Pronostiques par semaine !</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>+90% de réussite !</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Analyse des matchs!</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Applications mobiles</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Notifications !</a></li>
                                <li><a >

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                                <li style="padding-bottom:40px;"><strong style="font-family: Montserrat">PRIX:</strong>:<span class="badge" style="background-color: black;color:white">5€</span></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col s4" style="margin-top: 150px; ">
                        <div class="content-right">
                            <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal/pack">
                                {{ csrf_field() }}
                                <button class="button button-green">Pay with PayPal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-content">
                <div class="row">
                    <div class="col s8">
                        <div class="content-left">
                            <ul>

                                <li><a ><h4>Pack Foot + Bascket</h4></a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>10 Pronostiques par semaine !</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>+90% de réussite !</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Analyse des matchs!</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Applications mobiles</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Notifications !</a></li>
                                <li><a >

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                                <li style="padding-bottom:40px;"><strong style="font-family: Montserrat">PRIX:</strong><span class="badge" style="background-color: black;color:white">15€</span></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col s4" style="margin-top: 150px; ">
                        <div class="content-right">
                            <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal/pack2">
                                {{ csrf_field() }}
                                <button class="button button-green">Pay with PayPal</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-content">
                <div class="row">
                    <div class="col s8">
                        <div class="content-left">
                            <ul>

                                <li><a ><h4>Pack Foot + Bascket + tennis</h4></a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>20 Pronostiques par semaine !</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>+90% de réussite !</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Analyse des matchs!</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Applications mobiles</a></li>
                                <li><a ><i class="fas fa-shield-alt"></i>Notifications !</a></li>
                                <li><a >

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                                <li style="padding-bottom:40px;"><strong style="font-family: Montserrat">PRIX:</strong><span class="badge" style="background-color: black;color:white">25€</span></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col s4" style="margin-top: 150px; ">
                        <div class="content-right">
                            <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal/pack3">
                                {{ csrf_field() }}
                                <button class="button button-green">Pay with PayPal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
                <script>

                    new Vue({
                        el: '#pronostique',
                        data: {
                            users: [],
                            current: 1,
                            name: "",
                            owner: "",
                            url: 'api/pronostiques?page=' + this.current ?? current,
                        },
                        created() {

                            var vm = this
                            axios({
                                method: 'get',
                                url: 'api/pronostiques?page=' + vm.current,
                                headers: {"Authorization": @php echo ("'Bearer " . Auth::user()->api_token . "'"); @endphp },
                            }).then(function (response) {
                                vm.users = response.data.data
                                console.log(vm.users)
                            });

                            // GET request for remote image in node.js
                            setInterval(function(){
                                axios({
                                    method: 'get',
                                    url: 'api/pronostiques?page=' + vm.current ,
                                    headers: {"Authorization": @php echo ("'Bearer " . Auth::user()->api_token . "'"); @endphp },
                                }).then(function (response) {
                                    vm.users = response.data.data
                                });
                            }, 1000)


                        },
                        methods: {
                            resetFilter: function(event){
                                var vm = this

                                this.name = "";
                                this.owner = "";
                            },
                            beforePage: function(event){
                                var vm = this
                                if(this.current === 0){
                                    return false;
                                }
                                this.current = this.current - 1;
                                axios({
                                    method: 'get',
                                    url: 'api/pronostiques?page=' + vm.current,
                                    headers: {"Authorization": @php echo ("'Bearer " . Auth::user()->api_token . "'"); @endphp },
                                }).then(function (response) {
                                    vm.users = response.data.data
                                    console.log(vm.users)
                                });
                                console.log(this.current)
                            }   ,
                            nextPage: function(event) {
                                var vm = this
                                this.current = this.current + 1;
                                axios({
                                    method: 'get',
                                    url: 'api/pronostiques?page=' + vm.current,
                                    headers: {"Authorization": @php echo ("'Bearer " . Auth::user()->api_token . "'"); @endphp },
                                }).then(function (response) {
                                    vm.users = response.data.data
                                    console.log(vm.users)
                                });
                                console.log(this.current)
                            }
                        }
                    })



                </script>
    <script>


   </script>

@endsection
