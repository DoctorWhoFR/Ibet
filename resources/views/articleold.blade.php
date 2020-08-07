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
    <!-- end menu top -->
    <div class="slide">
        <div class="slide-show owl-carousel owl-theme">
            @foreach(\App\Articles::all()->chunk(2)[0] as $article)
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


    <!-- news-single -->
    <div class="news-single segments-page">
        <div class="container">
            <div class="content-title">
                <span>{{$articled->type}}</span>
                <h4>{{$articled->titre}}</h4>
                <p class="date">{{$articled->created_at}}</p>
            </div>
            <div class="content-image">
                <img src="images/news1.jpg" alt="">
            </div>
            <div class="content-text">
                {!! $articled->contenu !!}
            </div>
            <br>
            <div class="comment-form">
                <a href="{{route('home')}}" class="btn button-green"><span>Retour à l'accueil</span></a>
            </div>
        </div>
    </div>
    <!-- end news-single -->

    <!-- end matches -->


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
                                vm.users = response.data.data.reverse()
                                console.log(vm.users)
                            });

                            // GET request for remote image in node.js
                            setInterval(function(){
                                axios({
                                    method: 'get',
                                    url: 'api/pronostiques?page=' + vm.current ,
                                    headers: {"Authorization": @php echo ("'Bearer " . Auth::user()->api_token . "'"); @endphp },
                                }).then(function (response) {
                                    vm.users = response.data.data.reverse()
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
                                    vm.users = response.data.data.reverse()
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
                                    vm.users = response.data.data.reverse()
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
