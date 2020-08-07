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
    <!-- slide -->
    <div class="slide">
        <div class="slide-show owl-carousel owl-theme">
            @foreach($last_articles as $article)
                <div class="slide-content">
                    <div class="mask" ></div>
                    <img src="{{asset('images/slider1.jpg')}}" alt="">

                    <div class="caption">
                        <span style="text-transform: uppercase">{{$article->type}}</span>
                        <h4>{{$article->titre}}</h4>
                        <p>{{substr($article->contenu, 1, 60)}}..</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- end slide -->

    <!-- matches -->
    <div class="matches segments-page" id="pronostique">
        <div class="container">
            <div class="wrap-title">
                <h4>{{ now() }}</h4>
            </div>

            <div v-for="data in users">
            <div class="wrap-content"  v-if="Date.now()+7000 <= Date.parse(data.date_fin)">
                <div class="row" >
                    <div class="col s8">
                        <div class="content-left">
                            <ul>

                                <li><a href="club-details.html"><h4>Pronostique: <span v-text="data.type"></span></h4></a></li>
                                <li><a href="club-details.html" ><i class="fas fa-futbol"></i><span v-text="data.equipe_attack"> </span></a></li>
                                <li><a href="club-details.html"><i class="fas fa-shield-alt"></i><span v-text="data.equipe_defence"></span></a></li>
                                <li><a href="club-details.html">
                                        <div class="progress">
                                            <div class="determinate" v-bind:style="{ width: data.confiance+'%' }" style="padding-left:20px; color:white; font-family: Montserrat" ><span class="center-align" v-text="data.confiance"></span>%</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="content-right">
                            <ul>
                                <li style="padding-bottom:40px;">Cote:<span class="badge" style="background-color: black;color:white" v-text="data.cote_moyen">  </span></li>
                                <li v-if="Date.now() < Date.parse(data.date_fin)">MATCH: <span v-text="data.date_fin"></span></li>
                                <li v-else><span>MATCH FINI</span></li>
                            </ul>

                        </div>
                    </div>
                    <div v-if="data.type === 'foot'">
                        @if(Auth::user()->football == 1)
                            <div class="col s4" style="margin-top: 60px; " >
                                <div class="content-right">
                                    <a v-bind:href="'pronostique/'+data.id" class="button button-green" style="padding-right: 15px;"><strong v-text="data.pronostique" style="text-transform: uppercase; "></strong></a>
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="col s4" style="margin-top: 60px; " >
                                    <div class="content-right">
                                        <a href="{{route('shop')}}" class="button button-green" style="padding-right: 70px;">BOUTIQUES</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div v-if="data.type === 'bascket'">
                        @if(Auth::user()->basket == 1)
                            <div class="col s4" style="margin-top: 60px; " >
                                <div class="content-right">
                                    <a v-bind:href="'pronostique/'+data.id" class="button button-green" style="padding-right: 15px;"><strong v-text="data.pronostique" style="text-transform: uppercase; "></strong></a>
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="col s4" style="margin-top: 60px; " >
                                    <div class="content-right">
                                        <a href="{{route('shop')}}"  class="button button-green" style="padding-right: 70px;">BOUTIQUES</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div v-if="data.type === 'tennis'">
                        @if(Auth::user()->tennis == 1)
                            <div class="col s4" style="margin-top: 60px; " >
                                <div class="content-right">
                                    <a v-bind:href="'pronostique/'+data.id" class="button button-green" style="padding-right: 15px;"><strong v-text="data.pronostique" style="text-transform: uppercase; "></strong></a>
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="col s4" style="margin-top: 60px; " >
                                    <div class="content-right">
                                        <a href="{{route('shop')}}"  class="button button-green" style="padding-right: 70px;">BOUTIQUES</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
                </div>
            </div>
            </div>


                              <br>
            <h4 class="">Current page: <span v-text="current"></span></h4>                                                <br>
            <a href="javascript:void(0)" class="button button-green" v-on:click="beforePage">PAGE PRECEDENTE</a>              <br><br>
            <a href="javascript:void(0)" class="button button-green" v-on:click="nextPage">PAGE SUIVANTE</a>
        </div>
    </div>
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
