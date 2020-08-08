<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ibeet</title>

    <link rel='stylesheet' href='{{asset('plugins/goodlayers-core/plugins/fontawesome/font-awesome.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/goodlayers-core/plugins/elegant/elegant-font.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/goodlayers-core/plugins/style.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/goodlayers-core/include/css/page-builder.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/revslider/public/assets/css/rs6.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/sportspress/assets/css/sportspress.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/sportspress/assets/css/icons.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('css/style-core.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('css/bigslam-style-custom.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('plugins/google-map-plugin/assets/css/frontend.css')}}' type='text/css' media='all'>
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%7CRoboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic%7CLora%3Aregular%2Citalic%2C700%2C700italic&subset=cyrillic-ext%2Cvietnamese%2Clatin%2Ccyrillic%2Cgreek-ext%2Clatin-ext%2Cgreek&ver=5.3' type='text/css' media='all'>



</head>


<body class="home page-template-default page page-id-4957 theme-bigslam gdlr-core-body woocommerce-no-js bigslam-body bigslam-body-front bigslam-full gdlr-core-link-to-lightbox">
<div class="bigslam-mobile-header-wrap">
    <div class="bigslam-mobile-header bigslam-header-background bigslam-style-slide" id="bigslam-mobile-header">
        <div class="bigslam-mobile-header-container bigslam-container">
            <div class="bigslam-logo  bigslam-item-pdlr">
                <div class="bigslam-logo-inner">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" width="200" height="191" title="logo" style="color: green;"></a>
                </div>
            </div>
            <div class="bigslam-mobile-menu-right">

                <div class="bigslam-overlay-menu bigslam-mobile-menu" id="bigslam-mobile-menu"><a class="bigslam-overlay-menu-icon bigslam-mobile-menu-button bigslam-mobile-button-hamburger" href="#"><span></span></a>
                    <div class="bigslam-overlay-menu-content bigslam-navigation-font">
                        <div class="bigslam-overlay-menu-close"></div>
                        <div class="bigslam-overlay-menu-row">
                            <div class="bigslam-overlay-menu-cell">
                                <ul id="menu-main-navigation" class="menu">
                                    <li class="menu-item menu-item-home current-menu-item "><a href="{{route('home')}}" aria-current="page">Accueil</a></li>
                                    <li class="menu-item menu-item-home  "><a href="{{route('shop')}}" aria-current="page">Boutiques</a></li>
                                    <li class="menu-item menu-item-home  "><a href="{{route('pronostiques')}}" aria-current="page">Pronostiques</a></li>
                                    @if(Auth::user()->is_admin === 1)<li class="menu-item menu-item-home  "><a href="{{route('admins')}}" aria-current="page" style="color:red;">Administrations</a></li>@endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bigslam-body-outer-wrapper ">
    <div class="bigslam-body-wrapper clearfix  bigslam-with-transparent-header bigslam-with-frame">
        <div class="bigslam-header-background-transparent">
            <div class="bigslam-top-bar">
                <div class="bigslam-top-bar-background"></div>
                <div class="bigslam-top-bar-container clearfix bigslam-top-bar-full ">
                    <div class="bigslam-top-bar-left bigslam-item-pdlr"><span class="bigslam-upcoming-match-wrapper"><span class="bigslam-upcoming-match-title">Upcoming Match</span><span class="bigslam-upcoming-match-link">Real Soccer vs Valencia<span class="bigslam-sep">/</span>August 13, 2020<span class="bigslam-sep">/</span>Santiago Bernabéu Stadium</span>
                            </span>
                    </div>
                    <div class="bigslam-top-bar-right bigslam-item-pdlr">
                        <div class="bigslam-top-bar-right-social"><a href="#" target="_blank" class="bigslam-top-bar-social-icon" title="facebook"><i class="fa fa-facebook"></i></a><a href="#" target="_blank" class="bigslam-top-bar-social-icon" title="flickr"><i class="fa fa-flickr"></i></a><a href="#" target="_blank" class="bigslam-top-bar-social-icon" title="pinterest"><i class="fa fa-pinterest-p"></i></a><a href="#" target="_blank" class="bigslam-top-bar-social-icon" title="twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" class="bigslam-top-bar-social-icon" title="vimeo"><i class="fa fa-vimeo"></i></a></div>
                    </div>
                </div>
            </div>
            <header class="bigslam-header-wrap bigslam-header-style-plain  bigslam-style-splitted-menu bigslam-sticky-navigation bigslam-style-slide">
                <div class="bigslam-header-background"></div>
                <div class="bigslam-header-container  bigslam-header-full">

                    <div class="bigslam-header-container-inner clearfix">
                        <div class="bigslam-navigation bigslam-item-pdlr clearfix ">
                            <div class="bigslam-main-menu" id="bigslam-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home current-menu-item bigslam-normal-menu"><a href="index.html">Home</a></li>
                                    <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="schedule.html" class="sf-with-ul-pre">Schedule</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="schedule.html">Schedule – Default Style</a></li>
                                            <li class="menu-item" data-size="60"><a href="schedule-featured-style.html">Schedule – Featured Style</a></li>
                                            <li class="menu-item" data-size="60"><a href="schedule-medium-style.html">Schedule – Medium Style</a></li>
                                            <li class="menu-item" data-size="60"><a href="schedule-widget-style.html">Schedule – Widget Style</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="player-list-default-style.html" class="sf-with-ul-pre">Players</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="player-list-default-style.html">Player List – Default Style</a></li>
                                            <li class="menu-item" data-size="60"><a href="player-list-gallery.html">Player List – Gallery</a></li>
                                            <li class="menu-item" data-size="60"><a href="player-list-style-1.html">Player List – Style 1</a></li>
                                            <li class="menu-item" data-size="60"><a href="player-list-style-2.html">Player List – Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-sp_team bigslam-normal-menu"><a href="liverpool.html">Our Team</a></li>
                                    <li class="bigslam-center-nav-menu-item">
                                        <div class="bigslam-logo  bigslam-item-pdlr">
                                            <div class="bigslam-logo-inner">
                                                <a href="index.html"><img src="upload/logo.png" alt="" width="200" height="191" title="logo"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="#" class="sf-with-ul-pre">SportsPress</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Game</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="games-details.html">Games Details</a></li>
                                                    <li class="menu-item"><a href="game-results.html">Game Results</a></li>
                                                    <li class="menu-item"><a href="game-box-scores.html">Game Box Scores</a></li>
                                                    <li class="menu-item"><a href="game-calendar.html">Game Calendar</a></li>
                                                    <li class="menu-item"><a href="game-list.html">Game List</a></li>
                                                    <li class="menu-item"><a href="game-blocks.html">Game Blocks</a></li>
                                                    <li class="menu-item"><a href="game-countdown.html">Game Countdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Player</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="player-details.html">Player Details</a></li>
                                                    <li class="menu-item"><a href="player-statics.html">Player Statics</a></li>
                                                    <li class="menu-item"><a href="player-list-default-style.html">Player List</a></li>
                                                    <li class="menu-item"><a href="player-list-gallery.html">Player  Gallery</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item" data-size="60"><a href="league-table.html">League Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="#" class="sf-with-ul-pre">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">About</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="soccer-about-us-1.html">About Us (Soccer) 1</a></li>
                                                    <li class="menu-item"><a href="soccer-about-us-2.html">About Us (Soccer) 2</a></li>
                                                    <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                    <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                                    <li class="menu-item"><a href="about-us-3.html">About Us 3</a></li>
                                                    <li class="menu-item"><a href="about-our-team.html">About Our Team</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="portfolio-3-columns.html" class="sf-with-ul-pre">Portfolio</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a class="sf-with-ul-pre">Portfolio Grid</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-5-columns.html">Portfolio 5 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-2-columns-with-frame.html">Portfolio 2 Columns With Frame</a></li>
                                                            <li class="menu-item"><a href="portfolio-3-columns-with-frame.html">Portfolio 3 Columns With Frame</a></li>
                                                            <li class="menu-item"><a href="portfolio-4-columns-with-frame.html">Portfolio 4 Columns With Frame</a></li>
                                                            <li class="menu-item"><a href="portfolio-2-columns-no-space.html">Portfolio 2 Columns No Space</a></li>
                                                            <li class="menu-item"><a href="portfolio-3-columns-no-space.html">Portfolio 3 Columns No Space</a></li>
                                                            <li class="menu-item"><a href="portfolio-4-columns-no-space.html">Portfolio 4 Columns No Space</a></li>
                                                            <li class="menu-item"><a href="portfolio-5-columns-no-space.html">Portfolio 5 Columns No Space</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a class="sf-with-ul-pre">Portfolio Masonry</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="portfolio-masonry-4-columns.html">Masonry 4 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-masonry-3-columns.html">Masonry 3 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-masonry-2-columns.html">Masonry 2 Columns</a></li>
                                                            <li class="menu-item"><a href="portfolio-masonry-4-columns-no-space.html">Masonry 4 Columns No Space</a></li>
                                                            <li class="menu-item"><a href="portfolio-masonry-3-columns-no-space.html">Masonry 3 Columns No Space</a></li>
                                                            <li class="menu-item"><a href="portfolio-masonry-2-columns-no-space.html">Masonry 2 Columns No Space</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="menu-item menu-item-has-children"><a class="sf-with-ul-pre">Portfolio Side Thumb</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="portfolio-left-small-thumbnail.html">Portfolio Left Small Thumbnail</a></li>
                                                            <li class="menu-item"><a href="portfolio-right-small-thumbnail.html">Portfolio Right Small Thumbnail</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item" data-size="60"><a href="contact.html">Contact</a></li>
                                            <li class="menu-item" data-size="60"><a href="price-table.html">Price Table</a></li>
                                            <li class="menu-item" data-size="60"><a href="maintenance.html">Maintenance</a></li>
                                            <li class="menu-item" data-size="60"><a href="coming-soon.html">Coming Soon</a></li>
                                            <li class="menu-item" data-size="60"><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children bigslam-normal-menu"><a href="blog-full-right-sidebar.html" class="sf-with-ul-pre">Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-full-right-sidebar-with-frame.html" class="sf-with-ul-pre">Blog Full</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a></li>
                                                    <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a></li>
                                                    <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-grid-3-columns-no-space.html" class="sf-with-ul-pre">Blog Grid</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a></li>
                                                    <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a></li>
                                                    <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-3-columns-with-frame.html" class="sf-with-ul-pre">Blog Columns</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                    <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                    <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="standard-post-type.html">Single Posts</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children bigslam-mega-menu"><a href="#" class="sf-with-ul-pre">Features</a>
                                        <div class="sf-mega sf-mega-full">
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="accordions-toggles.html">Accordions &#038; Toggles</a></li>
                                                        <li class="menu-item"><a href="alert-box.html">Alert Box</a></li>
                                                        <li class="menu-item"><a href="blockquotes.html">Blockquotes</a></li>
                                                        <li class="menu-item"><a href="buttons.html">Buttons</a></li>
                                                        <li class="menu-item"><a href="call-to-action.html">Call To Action</a></li>
                                                        <li class="menu-item"><a href="column-services.html">Column Services</a></li>
                                                        <li class="menu-item"><a href="columns.html">Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="counters.html">Counters</a></li>
                                                        <li class="menu-item"><a href="count-down.html">Count Down</a></li>
                                                        <li class="menu-item"><a href="dividers.html">Dividers</a></li>
                                                        <li class="menu-item"><a href="dropcaps.html">Dropcaps</a></li>
                                                        <li class="menu-item"><a href="featured-boxes.html">Featured Boxes</a></li>
                                                        <li class="menu-item"><a href="flip-boxes.html">Flip Boxes</a></li>
                                                        <li class="menu-item"><a href="icon-list.html">Icon Lists</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="icons.html">Icons</a></li>
                                                        <li class="menu-item"><a href="images.html">Images</a></li>
                                                        <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                                        <li class="menu-item"><a href="promo-boxes.html">Promo Boxes</a></li>
                                                        <li class="menu-item"><a href="skill-bar.html">Skill Bar</a></li>
                                                        <li class="menu-item"><a href="skill-circle.html">Skill Circle</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="social-shares.html">Social Shares</a></li>
                                                        <li class="menu-item"><a href="stunning-texts.html">Stunning Texts</a></li>
                                                        <li class="menu-item"><a href="tabs-horizontal.html">Tabs Horizontal</a></li>
                                                        <li class="menu-item"><a href="tabs-vertical.html">Tabs Vertical</a></li>
                                                        <li class="menu-item"><a href="testimonial.html">Testimonial</a></li>
                                                        <li class="menu-item"><a href="titles.html">Titles</a></li>
                                                        <li class="menu-item"><a href="typography.html">Typography</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bigslam-navigation-slide-bar bigslam-style-2" id="bigslam-navigation-slide-bar"></div>
                            </div>
                            <div class="bigslam-main-menu-right-wrap clearfix  bigslam-item-mglr bigslam-navigation-top">
                                <div class="bigslam-main-menu-search" id="bigslam-top-search"><i class="fa fa-search"></i></div>
                                <div class="bigslam-top-search-wrap">
                                    <div class="bigslam-top-search-close"></div>

                                    <div class="bigslam-top-search-row">
                                        <div class="bigslam-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="index.html">
                                                <input type="text" class="search-field bigslam-title-font" placeholder="Search..." value="" name="s">
                                                <div class="bigslam-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="bigslam-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- bigslam-navigation -->
                    </div>
                    <!-- bigslam-header-inner -->
                </div>
                <!-- bigslam-header-container -->

            </header>
            <!-- header -->
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #1c1c1c ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                            <!-- START Soccer 01 REVOLUTION SLIDER 6.1.5 -->
                            <p class="rs-p-wp-fix"></p>
                            <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.5">
                                    <rs-slides>
                                        <rs-slide data-key="rs-1" data-title="Slide" data-thumb="#" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                            <img src="{{asset('images/match-bf.jpg')}}" title="slider-new-1" width="1920" height="1030" class="rev-slidebg" data-no-retina="">
                                            <!--
                -->
                                            <rs-layer id="slider-1-slide-1-layer-1" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:112px,112px,112px,3px;yo:421px,421px,421px,103px;" data-text="s:28,28,28,22;l:22;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:9;font-family:Jost*;">Bienvenue sur le site officiel de
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:104px,104px,104px,0;yo:459px,459px,459px,162px;" data-text="s:90,90,90,42;l:90,90,90,41;fw:600;a:inherit;" data-frame_0="tp:600;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;tp:600;st:210;sR:210;" data-frame_999="o:0;tp:600;st:w;sR:8490;" style="z-index:10;font-family:jost*;text-transform:uppercase;">Ibeet
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:107px,107px,107px,0;yo:570px,570px,570px,237px;" data-text="w:nowrap,nowrap,nowrap,normal;s:22,22,22,17;l:22,22,22,23;a:inherit,inherit,inherit,center;" data-dim="w:auto,auto,auto,350px;" data-frame_0="tp:600;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;tp:600;st:440;sR:440;" data-frame_999="o:0;tp:600;st:w;sR:8260;" style="z-index:11;font-family:jost*;">Pronostiques Sportifs Foots,Basckets,Tennis;
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-4" class="jost-font rev-btn" data-type="button" data-color="rgba(255,255,255,1)" data-xy="xo:109px,109px,109px,88px;yo:645px,645px,645px,330px;" data-text="s:13,13,13,12;l:17;ls:1px,1px,1px,0px;fw:700;a:inherit;" data-rsp_bd="off" data-padding="t:17,17,17,12;r:35,35,35,28;b:19,19,19,12;l:35,35,35,28;" data-border="bos:solid;boc:rgba(0,0,0,1);bow:0px,0,0,0;bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:680;sR:680;" data-frame_999="o:0;tp:600;st:w;sR:8020;" data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:12;background-color:#0f9d58;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">BOUTIQUES
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-5" class="jost-font rev-btn" data-type="button" data-color="#000000" data-xy="xo:281px,281px,281px,257px;yo:646px,646px,646px,330px;" data-text="s:13,13,13,12;l:17;ls:1px,1px,1px,0px;fw:700;a:inherit;" data-rsp_bd="off" data-padding="t:17,17,17,12;r:32,32,32,28;b:19,19,19,12;l:37,37,37,28;" data-border="bos:solid;boc:rgba(0,0,0,1);bow:0px,0,0,0;bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:940;sR:940;" data-frame_999="o:0;tp:600;st:w;sR:7760;" data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:13;background-color:#ffffff;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">PRONOSTIQUES
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:937px;" data-text="l:22;a:inherit;" data-dim="w:['15','15','15','15'];h:['100','100','100','100'];" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:14;"><img src="upload/devider.png" width="15" height="100" data-no-retina="">
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-9" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:905px;" data-text="s:14;l:22;ls:1px;fw:500,500,500,400;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:15;font-family:jost*;text-transform:uppercase;">Scroll to Discover
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-1-layer-24" data-type="image" data-rsp_ch="on" data-xy="xo:3px,3px,3px,160px;yo:308px,308px,308px,68px;" data-text="w:normal;s:20,20,20,7;l:0,0,0,9;" data-dim="w:374px,374px,374px,144px;h:504px,504px,504px,194px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:8;"><img src="{{asset('images/slider-icon-1.png')}}" width="374" height="504" data-no-retina="">
                                            </rs-layer>
                                            <!--
                -->
                                        </rs-slide>
                                        <rs-slide data-key="rs-20" data-title="Slide" data-thumb="#" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                            <img src="{{asset('images/match-2.jpg')}}" title="slider-new-2" width="1920" height="1030" class="rev-slidebg" data-no-retina="">
                                            <!--
                -->
                                            <rs-layer id="slider-1-slide-20-layer-1" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:112px,112px,112px,3px;yo:421px,421px,421px,103px;" data-text="s:28,28,28,22;l:22;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:9;font-family:Jost*;">Bienvenue sur le site officiel de
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:104px,104px,104px,0;yo:459px,459px,459px,162px;" data-text="s:90,90,90,42;l:90,90,90,41;fw:600;a:inherit;" data-frame_0="tp:600;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;tp:600;st:210;sR:210;" data-frame_999="o:0;tp:600;st:w;sR:8490;" style="z-index:10;font-family:jost*;text-transform:uppercase;">Ibeet
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:107px,107px,107px,0;yo:570px,570px,570px,237px;" data-text="w:nowrap,nowrap,nowrap,normal;s:22,22,22,17;l:22,22,22,23;a:inherit,inherit,inherit,center;" data-dim="w:auto,auto,auto,350px;" data-frame_0="tp:600;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;tp:600;st:440;sR:440;" data-frame_999="o:0;tp:600;st:w;sR:8260;" style="z-index:11;font-family:jost*;">Pronostiques Sportifs Foots,Basckets,Tennis;
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-4" class="jost-font rev-btn" data-type="button" data-color="rgba(255,255,255,1)" data-xy="xo:109px,109px,109px,88px;yo:645px,645px,645px,330px;" data-text="s:13,13,13,12;l:17;ls:1px,1px,1px,0px;fw:700;a:inherit;" data-rsp_bd="off" data-padding="t:17,17,17,12;r:35,35,35,28;b:19,19,19,12;l:35,35,35,28;" data-border="bos:solid;boc:rgba(0,0,0,1);bow:0px,0,0,0;bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:680;sR:680;" data-frame_999="o:0;tp:600;st:w;sR:8020;" data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:12;background-color:#0f9d58;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">BOUTIQUES
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-5" class="jost-font rev-btn" data-type="button" data-color="#000000" data-xy="xo:281px,281px,281px,257px;yo:646px,646px,646px,330px;" data-text="s:13,13,13,12;l:17;ls:1px,1px,1px,0px;fw:700;a:inherit;" data-rsp_bd="off" data-padding="t:17,17,17,12;r:32,32,32,28;b:19,19,19,12;l:37,37,37,28;" data-border="bos:solid;boc:rgba(0,0,0,1);bow:0px,0,0,0;bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:940;sR:940;" data-frame_999="o:0;tp:600;st:w;sR:7760;" data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:13;background-color:#ffffff;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">PRONOSTIQUES
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:937px;" data-text="l:22;a:inherit;" data-dim="w:['15','15','15','15'];h:['100','100','100','100'];" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:14;"><img src="upload/devider.png" width="15" height="100" data-no-retina="">
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-9" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:905px;" data-text="s:14;l:22;ls:1px;fw:500,500,500,400;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:15;font-family:jost*;text-transform:uppercase;">Scroll to Discover
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-20-layer-24" data-type="image" data-rsp_ch="on" data-xy="xo:3px,3px,3px,160px;yo:308px,308px,308px,68px;" data-text="w:normal;s:20,20,20,7;l:0,0,0,9;" data-dim="w:374px,374px,374px,144px;h:504px,504px,504px,194px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:8;"><img src="upload/slider-icon-1.png" width="374" height="504" data-no-retina="">
                                            </rs-layer>
                                            <!--
                -->
                                        </rs-slide>
                                        <rs-slide data-key="rs-21" data-title="Slide" data-thumb="#" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                            <img src="upload/slider-new-3-1.jpg" title="slider-new-3" width="1920" height="1030" class="rev-slidebg" data-no-retina="">
                                            <!--
                -->
                                            <rs-layer id="slider-1-slide-21-layer-1" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:112px,112px,112px,3px;yo:421px,421px,421px,103px;" data-text="s:28,28,28,22;l:22;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:9;font-family:Jost*;">Bienvenue sur le site officiel de
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:104px,104px,104px,0;yo:459px,459px,459px,162px;" data-text="s:90,90,90,42;l:90,90,90,41;fw:600;a:inherit;" data-frame_0="tp:600;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;tp:600;st:210;sR:210;" data-frame_999="o:0;tp:600;st:w;sR:8490;" style="z-index:10;font-family:jost*;text-transform:uppercase;">Ibeet
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:107px,107px,107px,0;yo:570px,570px,570px,237px;" data-text="w:nowrap,nowrap,nowrap,normal;s:22,22,22,17;l:22,22,22,23;a:inherit,inherit,inherit,center;" data-dim="w:auto,auto,auto,350px;" data-frame_0="tp:600;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;tp:600;st:440;sR:440;" data-frame_999="o:0;tp:600;st:w;sR:8260;" style="z-index:11;font-family:jost*;">Pronostiques Sportifs Foots,Basckets,Tennis;
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-4" class="jost-font rev-btn" data-type="button" data-color="rgba(255,255,255,1)" data-xy="xo:109px,109px,109px,88px;yo:645px,645px,645px,330px;" data-text="s:13,13,13,12;l:17;ls:1px,1px,1px,0px;fw:700;a:inherit;" data-rsp_bd="off" data-padding="t:17,17,17,12;r:35,35,35,28;b:19,19,19,12;l:35,35,35,28;" data-border="bos:solid;boc:rgba(0,0,0,1);bow:0px,0,0,0;bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:680;sR:680;" data-frame_999="o:0;tp:600;st:w;sR:8020;" data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:12;background-color:#0f9d58;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">BOUTIQUES
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-5" class="jost-font rev-btn" data-type="button" data-color="#000000" data-xy="xo:281px,281px,281px,257px;yo:646px,646px,646px,330px;" data-text="s:13,13,13,12;l:17;ls:1px,1px,1px,0px;fw:700;a:inherit;" data-rsp_bd="off" data-padding="t:17,17,17,12;r:32,32,32,28;b:19,19,19,12;l:37,37,37,28;" data-border="bos:solid;boc:rgba(0,0,0,1);bow:0px,0,0,0;bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:940;sR:940;" data-frame_999="o:0;tp:600;st:w;sR:7760;" data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:13;background-color:#ffffff;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">PRONOSTIQUES
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:937px;" data-text="l:22;a:inherit;" data-dim="w:['15','15','15','15'];h:['100','100','100','100'];" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:14;"><img src="upload/devider.png" width="15" height="100" data-no-retina="">
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-9" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:905px;" data-text="s:14;l:22;ls:1px;fw:500,500,500,400;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:15;font-family:jost*;text-transform:uppercase;">Scroll to Discover
                                            </rs-layer>
                                            <!--

                -->
                                            <rs-layer id="slider-1-slide-21-layer-24" data-type="image" data-rsp_ch="on" data-xy="xo:3px,3px,3px,160px;yo:308px,308px,308px,68px;" data-text="w:normal;s:20,20,20,7;l:0,0,0,9;" data-dim="w:374px,374px,374px,144px;h:504px,504px,504px,194px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:8;"><img src="upload/slider-icon-1.png" width="374" height="504" data-no-retina="">
                                            </rs-layer>
                                            <!--
                -->
                                        </rs-slide>
                                    </rs-slides>
                                    <rs-static-layers>
                                        <!--
                -->
                                    </rs-static-layers>
                                    <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                                </rs-module>

                            </rs-module-wrap>
                            <!-- END REVOLUTION SLIDER -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bigslam-page-wrapper" id="bigslam-page-wrapper">
            <div class="bigslam-content-container bigslam-container">
                <div class=" bigslam-sidebar-wrap clearfix bigslam-line-height-0 bigslam-sidebar-style-right">
                    <div class=" bigslam-sidebar-center bigslam-column-40 bigslam-line-height">
                        <div class="gdlr-core-page-builder-body">
                            <div class="gdlr-core-pbf-section">
                                <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;">
                                                    {{$pronotisque->equipe_defence}} VS {{$pronotisque->equipe_attack}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                <div class="sportspress sp-widget-align-none">

                                                    <div class="sp-template sp-template-player-details sp-template-details">
                                                        <h4>Test</h4>
                                                        <p>{{$pronotisque->analyse}}</p>
                                                        <div class="sp-list-wrapper">
                                                            <dl class="sp-player-details"><dt>Pronostique:</dt>
                                                                <dd>{{$pronotisque->pronostique}}</dd><dt>Cote:</dt> <dd>{{$pronotisque->cote_moyen}}</dd>       <dt>Confiance:</dt><dd>{{$pronotisque->confiance}}%</dd>
                                                                      <dt>Date:</dt><dd>{{$pronotisque->date_debut}}</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" bigslam-sidebar-right bigslam-column-20 bigslam-line-height bigslam-line-height">
                        <div class="bigslam-sidebar-area bigslam-item-pdlr"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="bigslam-footer-wrapper">
                <div class="bigslam-footer-container bigslam-container clearfix">
                    <div class="bigslam-footer-column bigslam-item-pdlr bigslam-column-20">
                        <div id="text-11" class="widget widget_text bigslam-widget">
                            <h3 class="bigslam-widget-title">Informations</h3>
                            <div class="textwidget">
                                <p>Ibet est un service professionnel d'analyse sportif.</p>
                                <p>Avec un tôt de réussite unique de 90%+ !
                            </div>
                        </div>
                    </div>
                    <div class="bigslam-footer-column bigslam-item-pdlr bigslam-column-20">
                        <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget bigslam-widget">
                            <h3 class="bigslam-widget-title">Liens</h3>
                            <div class="menu-resources-container">
                                <ul id="menu-resources" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                                    <li class="menu-item"><a href="#">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bigslam-copyright-wrapper">
                <div class="bigslam-copyright-container bigslam-container">
                    <div class="bigslam-copyright-text bigslam-item-pdlr">Copyright 2020 Ibet, All Right Reserved | Created by <a href="https://github.com/DoctorWhoFR">Maxime Benamara</a></div>
                </div>
            </div>
        </footer>
    </div>
</div><a href="#bigslam-top-anchor" class="bigslam-footer-back-to-top-button" id="bigslam-footer-back-to-top-button"><i class="fa fa-angle-up"></i></a>

<script type='text/javascript' src='{{asset('js/jquery/jquery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery/jquery-migrate.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/revslider/public/assets/js/revolution.tools.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/revslider/public/assets/js/rs6.min.js')}}'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var SnazzyDataForSnazzyMaps = [];
    SnazzyDataForSnazzyMaps = {
        "id": 38,
        "name": "Shades of Grey",
        "description": "A map with various shades of grey. Great for a website with a really dark theme. ",
        "url": "https:////snazzymaps.com//style//38//shades-of-grey",
        "imageUrl": "https:////snazzy-maps-cdn.azureedge.net//assets//38-shades-of-grey.png?v=20170407093939",
        "json": "[{/"featureType/":/"all/",/"elementType/":/"labels.text.fill/",/"stylers/":[{/"saturation/":36},{/"color/":/"#000000/"},{/"lightness/":40}]},{/"featureType/":/"all/",/"elementType/":/"labels.text.stroke/",/"stylers/":[{/"visibility/":/"on/"},{/"color/":/"#000000/"},{/"lightness/":16}]},{/"featureType/":/"all/",/"elementType/":/"labels.icon/",/"stylers/":[{/"visibility/":/"off/"}]},{/"featureType/":/"administrative/",/"elementType/":/"geometry.fill/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":20}]},{/"featureType/":/"administrative/",/"elementType/":/"geometry.stroke/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":17},{/"weight/":1.2}]},{/"featureType/":/"landscape/",/"elementType/":/"geometry/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":20}]},{/"featureType/":/"poi/",/"elementType/":/"geometry/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":21}]},{/"featureType/":/"road.highway/",/"elementType/":/"geometry.fill/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":17}]},{/"featureType/":/"road.highway/",/"elementType/":/"geometry.stroke/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":29},{/"weight/":0.2}]},{/"featureType/":/"road.arterial/",/"elementType/":/"geometry/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":18}]},{/"featureType/":/"road.local/",/"elementType/":/"geometry/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":16}]},{/"featureType/":/"transit/",/"elementType/":/"geometry/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":19}]},{/"featureType/":/"water/",/"elementType/":/"geometry/",/"stylers/":[{/"color/":/"#000000/"},{/"lightness/":17}]}]",
        "views": 264721,
        "favorites": 544,
        "createdBy": {
        "name": "Adam Krogh",
            "url": "https:////twitter.com//adamkrogh"
    },
    "createdOn": "2013-11-12T18:21:41.94",
        "tags": ["dark", "greyscale"],
        "colors": ["black", "gray"]
    };
    /* ]]> */
</script>
<script type='text/javascript' src='plugins/snazzy-maps/snazzymaps.js'></script>
<script type="text/javascript">
    function setREVStartSize(t) {
        try {
            var h, e = document.getElementById(t.c).parentNode.offsetWidth;
            if (e = 0 === e || isNaN(e) ? window.innerWidth : e, t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw), t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw), t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh), t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh), t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide), t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide), t.mh = void 0 === t.mh || "" == t.mh || "auto" === t.mh ? 0 : parseInt(t.mh, 0), "fullscreen" === t.layout || "fullscreen" === t.l) h = Math.max(t.mh, window.innerHeight);
            else {
                for (var i in t.gw = Array.isArray(t.gw) ? t.gw : [t.gw], t.rl) void 0 !== t.gw[i] && 0 !== t.gw[i] || (t.gw[i] = t.gw[i - 1]);
                for (var i in t.gh = void 0 === t.el || "" === t.el || Array.isArray(t.el) && 0 == t.el.length ? t.gh : t.el, t.gh = Array.isArray(t.gh) ? t.gh : [t.gh], t.rl) void 0 !== t.gh[i] && 0 !== t.gh[i] || (t.gh[i] = t.gh[i - 1]);
                var r, a = new Array(t.rl.length),
                    n = 0;
                for (var i in t.tabw = t.tabhide >= e ? 0 : t.tabw, t.thumbw = t.thumbhide >= e ? 0 : t.thumbw, t.tabh = t.tabhide >= e ? 0 : t.tabh, t.thumbh = t.thumbhide >= e ? 0 : t.thumbh, t.rl) a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
                for (var i in r = a[0], a) r > a[i] && 0 < a[i] && (r = a[i], n = i);
                var d = e > t.gw[n] + t.tabw + t.thumbw ? 1 : (e - (t.tabw + t.thumbw)) / t.gw[n];
                h = t.gh[n] * d + (t.tabh + t.thumbh)
            }
            void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(t.c).height = h, window.rs_init_css.innerHTML += "#" + t.c + "_wrapper { height: " + h + "px }"
        } catch (t) {
            console.log("Failure at Presize of Slider:" + t)
        }
    };
</script>


<script type='text/javascript' src='plugins/goodlayers-core/plugins/script.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "#",
        "ilightbox_skin": "dark"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>
<script type='text/javascript' src='plugins/sportspress/assets/js/jquery.dataTables.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var localized_strings = {
        "days": "days",
        "hrs": "hrs",
        "mins": "mins",
        "secs": "secs",
        "previous": "Previous",
        "next": "Next"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='plugins/sportspress/assets/js/sportspress.js'></script>
<script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var bigslam_script_core = {
        "home_url": "index.html"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='js/plugins.js'></script>
<script type='text/javascript' src='plugins/google-map-plugin/assets/js/maps.js'></script>
<script type="text/javascript">
    setREVStartSize({
        c: 'rev_slider_1_1',
        rl: [1240, 1240, 1240, 480],
        el: [890, 890, 890, 520],
        gw: [1300, 1300, 1300, 480],
        gh: [890, 890, 890, 520],
        layout: 'fullwidth',
        mh: "0"
    });
    var revapi1,
        tpj;
    jQuery(function() {
        tpj = jQuery;
        if (tpj("#rev_slider_1_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                jsFileLocation: "plugins/revslider/public/assets/js/",
                visibilityLevels: "1240,1240,1240,480",
                gridwidth: "1300,1300,1300,480",
                gridheight: "890,890,890,520",
                minHeight: "",
                editorheight: "890,768,960,520",
                responsiveLevels: "1240,1240,1240,480",
                disableProgressBar: "on",
                navigation: {
                    mouseScrollNavigation: false,
                    onHoverStop: false,
                    arrows: {
                        enable: true,
                        style: "uranus",
                        hide_onmobile: true,
                        hide_under: "980px",
                        hide_onleave: true,
                        left: {
                            v_offset: 101
                        },
                        right: {
                            v_offset: 101
                        }
                    },
                    bullets: {
                        enable: true,
                        tmp: "<span class=/"tp-bullet-inner/"></span>",
                        style: "uranus",
                        v_offset: 40,
                        space: 10
                    }
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });
        }

    });
</script>

<script type="text/javascript">
    setREVStartSize({
        c: 'rev_slider_1_1',
        rl: [1240, 1240, 1240, 480],
        el: [1100, 1100, 1100, 500],
        gw: [1240, 1240, 1240, 480],
        gh: [1100, 1100, 1100, 500],
        layout: 'fullwidth',
        mh: "0"
    });
    var revapi1,
        tpj;
    jQuery(function() {
        tpj = jQuery;
        if (tpj("#rev_slider_1_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                jsFileLocation: "//demo.goodlayers.com/bigslam/homepages/soccer01/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1240,1240,480",
                gridwidth: "1240,1240,1240,480",
                gridheight: "1100,1100,1100,500",
                minHeight: "",
                editorheight: "1100,768,960,500",
                responsiveLevels: "1240,1240,1240,480",
                disableProgressBar: "on",
                navigation: {
                    mouseScrollNavigation: false,
                    onHoverStop: false,
                    touch: {
                        touchenabled: true
                    },
                    arrows: {
                        enable: true,
                        style: "uranus",
                        hide_onleave: true,
                        left: {

                        },
                        right: {

                        }
                    }
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });
        }

    });
</script>
<script>
    var htmlDivCss = unescape(".jost-font%7B%20font-family%3A%20Jost%20%21important%3B%20%7D");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script>
    var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script>
    var htmlDivCss = unescape("%0A%0A%0A");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>

<script type="text/javascript">
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
            err += "</div>";
            jQuery(sliderID).show().html(err);
        }
    }
</script>
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
</body>
</html>
