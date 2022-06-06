<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>SMART FAN</title>

<!-- Stylesheets -->

<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">



<link rel="shortcut icon" href="{{asset('frontend/images/logo.jpg')}}" type="image/x-icon">

<link rel="icon" href="{{asset('frontend/images/logo.jpg')}}" type="image/x-icon">

<!--Color Switcher Mockup-->

<link href="{{asset('frontend/css/color-switcher-design.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('frontend/dist/css/splide.min.css')}}">




<!-- Responsive -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>



<body>

@include('flashMessage')

<div class="page-wrapper">



    <!-- Preloader -->

    <div class="preloader"></div>



    <!-- Main Header-->

    <header class="main-header header-style-three">

        <!-- Header top -->

        <div class="header-top-two">

            <div class="auto-container">

                <div class="inner-container">

                    <div class="top-left">

                        <ul class="contact-list-four">

                            <li><i class="flaticon-location"></i> Cameroun<strong>Address</strong></li>

                            <li><i class="flaticon-alarm-clock-1"></i>Lundi - Samedi 8h00 - 18h00 <strong>Ouverture</strong></li>

                            <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">infos@smarfantechnology.com</a> <strong>Mail</strong></li>

                        </ul>

                    </div>



                    <div class="top-right">

                        <button class="nav-toggler"><i class="flaticon flaticon-menu-2"></i></button>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Header Top -->



        <!-- Header Lower -->

        <div class="header-lower">

            <div class="auto-container">

                <!-- Main box -->

                <div class="main-box">

                    <div class="logo-box">

                    <div class="logo"><a href=""><img src="{{asset('frontend/images/logo.jpg')}}"  style="width:64px" class="img-fluid" alt="" title=""></a></div>

                    </div>



                    <div class="nav-outer">

                        <ul class="social-icon-four">

                            <li><a href="https://www.facebook.com/smartfantech"><span class="fab fa-facebook-f"></span></a></li>

                            <li><a href="https://www.linkedin.com/company/smart-fan-technology/"><span class="fab fa-linkedin"></span></a></li>

                            {{-- <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> --}}

                        </ul>



                        <!-- Main Menu -->

                        <nav class="main-menu navbar-expand-md">

                            <div class="navbar-header">

                                <!-- Toggle Button -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>



                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li ><a href="#">Accueil</a>



                                    </li>

                                    <li ><a href="#about">A Propos</a>



                                    </li>

                                    <li ><a href="#product">Nos Produits</a>



                                    </li>

                                    <li ><a class=" search-btn search-box-outer" href="#">Contact</a>

                                    </li>





                                </ul>

                            </div>



                            <div class="search-box-btn search-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                        </nav>



                        <!-- Main Menu End-->

                        <div class="outer-box clearfix">

                            <!-- Search Btn -->



                            <!-- Quote Btn -->

                          <div class="btn-box">

                                <a href="{{route('signin')}}" class="theme-btn btn-style-one"><span class="btn-title"><i class="flaticon-chair"></i> Se connectez   </span></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Sticky Header  -->

        <div class="sticky-header">

            <div class="auto-container">



                <div class="main-box">

                    <div class="logo-box">

                        <div class="logo"><a href="index.html"><img src="{{asset('frontend/images/logo.jpg')}}"   style="" class="img-fluid" alt="" title=""></a></div>

                        <div class="upper-right">

                            <div class="search-box">

                                <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>

                            </div>

                            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>

                        </div>

                    </div>



                    <nav class="main-menu navbar-expand-md">

                        <!--Keep This Empty / Menu will come through Javascript-->

                    </nav>

                </div>

            </div>

        </div><!-- End Sticky Menu -->



        <!-- Mobile Header -->

        <div class="mobile-header">

            <div class="logo"><a href="index.html"><img src="{{asset('frontend/images/logo.jpg')}}" alt="" title=""></a></div>



            <!--Nav Box-->

            <div class="nav-outer clearfix">

                <div class="outer-box">

                    <!-- Search Btn -->

                    <div class="search-box">

                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>

                    </div>



                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>

                </div>

            </div>

        </div>



        <!-- Mobile Menu  -->

        <div class="mobile-menu">

            <div class="menu-backdrop"></div>



            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

            <nav class="menu-box">

                <div class="upper-box">

                    <div class="nav-logo"><a href="index.html"><img src="{{asset('frontend/images/logo.jpg')}}" alt="" title=""></a></div>

                    <div class="close-btn"><i class="icon flaticon-close"></i></div>

                </div>



                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>



                <ul class="contact-list-one">

                    <li><i class="flaticon-location"></i> PK 10 - Face Genie Militaire, Douala, CAMEROUN <strong>Addresse</strong></li>

                    <li><i class="flaticon-alarm-clock-1"></i>Lundi - Vendredi 8h - 18h <strong>Horaires</strong></li>

                    <li><i class="flaticon-email-1"></i> <a href="infos@smarfantechnology.com">infos@smarfantechnology.com</a> <strong>Contactez-Nous</strong></li>

                </ul>



                <ul class="social-links">

                    <li><a href="https://www.facebook.com/smartfantech"><span class="fab fa-facebook-f"></span></a></li>

                    <li><a href="https://www.linkedin.com/company/smart-fan-technology/"><span class="fab fa-linkedin"></span></a></li>

                    {{-- <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li> --}}

                </ul>

            </nav>

        </div><!-- End Mobile Menu -->



        <!-- Header Search -->

        <div class="search-popup">

            <button class="close-search"><i class="flaticon-close"></i></button>

            <form method="post" action="{{route('sendmessage')}}">
                @csrf

                <div class="form-group">
  <h3 style="color:white">Contactez-nous</h3>   <br>
  
  
  
  

  <div class="form-group">
    <label for="formGroupExampleInput" style="color:white">Objet</label> 
    <input type="text" class="form-control" name="objet" id="formGroupExampleInput" placeholder="objet">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput" style="color:white">Votre email</label> 
    <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput" style="color:white">Votre numéro</label> 
    <input type="text" class="form-control" name="number" id="formGroupExampleInput" placeholder="numero">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"style="color:white" >Message</label>
    <textarea type="text" class="form-control"  name="message" rows="10" >  </textarea>
  </div>

  <button type="submit" class="btn btn-warning"> Envoyer </button>
  
  
  
  
  
  
                  <span style="color:white">EMAIL : infos@smarfantechnology.com</span>   <br>
                   <span style="color:white"> PHONE : (+237) 696 675 082</span> <br>
                                       <span style="color:white">  ADRESSE :  Douala, Cameroun - PK 10 -  Face Genie militaire </span><br>
                                       <span style="color:green">  OUVERT DE LUNDI A SAMEDI DE 08H00 A 18H00 </span>
                   

                 
                </div>
                
                
                

            </form>

        </div>

        <!-- End Header Search -->



    </header>

    <!--End Main Header -->



    <!-- Hidden bar back drop -->

    <div class="form-back-drop"></div>



    <!-- Hidden Bar -->

    <section class="hidden-bar">

        <div class="inner-box">

            <div class="title-box">

                <h2>Contact Us</h2>

                <div class="cross-icon"><span class="fa fa-times"></span></div>

            </div>



            <!--Appointment Form-->

            <div class="form-style-one">

                <form action="#" method="post">

                    <div class="form-group">

                        <input type="text" name="username" class="username" placeholder="Your Name *">

                    </div>

                    <div class="form-group">

                        <input type="email" name="email" class="email" placeholder="Your Email *">

                    </div>

                    <div class="form-group">

                        <input type="text" name="phone" class="phone" value="" placeholder="Your Phone*" required>

                    </div>

                    <div class="form-group">

                        <textarea name="contact_message" class="message" placeholder="Text Message"></textarea>

                    </div>

                    <div class="form-group">

                        <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form"><span class="btn-title">Submit Now</span> </button>

                    </div>

                </form>

            </div>





            <ul class="contact-list-one">

                <li><i class="flaticon-location"></i> PK 10 - Face Genie Militaire, Douala, CAMEROUN <strong>Addresse</strong></li>

                <li><i class="flaticon-alarm-clock-1"></i>Lundi - Vendredi 08h - 18h <strong>Horaire</strong></li>

                <li><i class="flaticon-email-1"></i> <a href="infos@smarfantechnology.com">infos@smarfantechnology.com</a> <strong>Contactez-Nous</strong></li>

            </ul>

        </div>

    </section>

    <!--End Hidden Bar -->



    <!-- Banner Section Two-->

    <section class="banner-section-two">

        <div class="banner-carousel owl-carousel owl-theme">

            <!-- Slide Item -->

            <div class="slide-item">

                <div class="anim-icons">

                    <span class="icon object-7 animate-6"></span>

                    <span class="icon object-8 animate-7"></span>

                </div>



                <div class="auto-container">

            <div class="image-layer" style="background-image: url({{asset('plan.jpg')}});"></div>



                    <div class="content-box">

                        <div class="content-inner">

                            <span class="title animate-1">Fabrication des ventilateurs et climatisseurs solaires antipalidiques</span>

                            <h2 class="animate-2">SMART FAN TECHNOLOGY</h2>

                            <div class="text animate-3">

                                <ul class="info-list-two">

                                    <!-- <li><i class="far fa-user"></i> 500+ <br>Visiter</li> -->

                                    <li><i class="far fa-calendar-alt"></i> Lundi-samedi <br>08h-18h00</li>

                                    <li><i class="fa fa-map-marker-alt"></i> Douala, Cameroun<br>PK 10 -  Face Genie militaire</li>

                                </ul>

                            </div>

                            <div class="btn-box animate-4">

                                {{-- <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a> --}}

                                <a href="https://www.youtube.com/watch?v=jQ5lO9r4TGQ" class="theme-btn btn-style-two lightbox-image"><span class="btn-title">Video de présentation</span></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- Slide Item -->

            <div class="slide-item">

                <div class="anim-icons">

                    <span class="icon object-7 animate-6"></span>

                    <span class="icon object-8 animate-7"></span>

                </div>



                <div class="auto-container">

                    <div class="image-layer" style="background-image: url({{asset('plan.jpg')}});"></div>


                    <div class="content-box">

                        <div class="content-inner">

                            <span class="title animate-1">Fabrication des ventilateurs et climatisseurs solaires antipalidiques</span>

                            <h2 class="animate-2">SMART FAN TECHNOLOGY</h2>

                            <div class="text animate-3">

                                <ul class="info-list-two">

                                    <!-- <li><i class="far fa-user"></i> 500+ <br>Visiter</li> -->

                                    <li><i class="far fa-calendar-alt"></i> Lundi-samedi <br>08h-18h00</li>

                                    <li><i class="fa fa-map-marker-alt"></i> Douala, Cameroun<br>PK 10 -  Face Genie militaire</li>

                                </ul>

                            </div>

                            <div class="btn-box animate-4">

                                {{-- <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a> --}}

                                <a href="https://www.youtube.com/watch?v=jQ5lO9r4TGQ" class="theme-btn btn-style-two lightbox-image"><span class="btn-title">Video De presentation</span></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--End Banner Section Two -->



    <section id="about" class="about-section">

        <div class="auto-container">

            <div class="row">

                <!-- Image Column -->

                <div class="image-column col-lg-6 col-md-12 col-sm-12">

                    <div class="about-image-wrapper">
                    <figure class="image-3 wow zoomIn" data-wow-delay="600ms"><img src="{{asset('frontend/images/resource/writer.png')}}" alt=""/></figure>

                        <figure class="image-2 wow zoomIn" data-wow-delay="900ms"><img src="{{asset('frontend/images/resource/girl.png')}}" alt=""/></figure>


                        <figure class="image-1 wow zoomIn" data-wow-delay="300ms"><img src="{{asset('frontend/images/resource/vector.png')}}" alt=""/></figure>

                        <a href="https://www.youtube.com/watch?v=jQ5lO9r4TGQ" class="lightbox-image play-btn wow zoomIn" data-wow-delay="1200ms"><span class="icon fa fa-play"></span></a>

                    </div>

                </div>



                <!-- Content Column -->

                <div class="content-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="sec-title">

                            {{-- <span class="sub-title">WELCOME SMART FAN </span> --}}

                            <h2>SMART FAN TECHNOLOGY</h2>

                            <span class="divider"></span>

                        </div>

                        <p style="font-size: 1.2em; text-align: justify;">SMART FAN TECHNOLOGY est une Entreprise spécialisée dans le développement des solutions technologiques innovantes associées aux systèmes de ventilation domestiques et industriels.<br/>

                            Avec une vision, Devenir la première industrie numérique 4.0 basée sur la plasturgie en Afrique Francophone, nous développons une technologie qui allie injection plastique et thermoformage des pièces en matières composites.<br/>

                            Nos solutions sont orientées vers :
                            <ul>
                                <li style="font-size: 1.2em">
                                    -&nbsp;&nbsp;&nbsp;L’électroménager
                                </li>
                                <li style="font-size: 1.2em">
                                    -&nbsp;&nbsp;&nbsp;La santé
                                </li>
                                <li style="font-size: 1.2em">
                                    -&nbsp;&nbsp;&nbsp;L’aviation
                                </li>
                                <li style="font-size: 1.2em">
                                    -&nbsp;&nbsp;&nbsp;L’automobile
                                </li>
                            </ul>
                        </p>

                        <!-- <p> Rub shoulders with international technology executives, top-tier investors, policymakers, startups, and scale-ups, during two days of business, knowledge sharing and a whole lot of fun. </p> -->

                        <div class="btn-box">

                            <a href="#" class="theme-btn btn-style-one search-btn search-box-outer"><span class="btn-title">Nous contactez</span></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- End Countdown Section -->



    <!-- About Section Three-->


    <!-- End About Section Three -->



    <!-- Feature Section Three-->



      <!-- Schedule Section -->

    <section id="product" class="schedule-section">

        <div class="anim-icons full-width">

            <span class="icon icon-circle-2"></span>

            <span class="icon pattern-4"></span>

        </div>



        <div class="auto-container">

            <div class="sec-title text-center">

                <span class="sub-title">Ventilateur solaire</span>

                <h2>Nos produits</h2>

                <span class="divider"></span>

            </div>



            <div class="schedule-tabs tabs-box">



                <div class="tabs-content">

                    <!--Tab-->

                    <div class="tab active-tab" id="tab-1">

                        <div class="schedule-timeline">

                            <!-- schedule Block -->
                            {{-- <div class="schedule-block-three"> --}}
                                {{-- <div class="inner-box"> --}}
                                    {{-- <div class="inner"> --}}
                                        {{-- <div class="card mb-3"> --}}
                                            {{-- <div class="row g-0"> --}}
                                              {{-- <div class="col-md-4"> --}}
                                                {{-- <img src="{{asset('frontend/images/resource/d.JPG')}}" class="img-fluid rounded-start" alt="..."> --}}
                                              {{-- </div> --}}
                                              {{-- <div class="col-md-8"> --}}
                                                {{-- <div class="card-body"> --}}
                                                  {{-- <h5 class="card-title">Card title</h5> --}}
                                                  {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                                  {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                                {{-- </div> --}}
                                              {{-- </div> --}}
                                            {{-- </div> --}}
                                        {{-- </div> --}}

                                    {{-- </div> --}}
                                {{-- </div> --}}
                            {{-- </div> --}}

                            <div class="schedule-block-three">

                                <div class="inner-box">



                                    <div class="inner">

                                        <figure class="thumb">

                                            <img src="{{asset('frontend/images/resource/ventilo.png')}}" alt="">

                                        </figure>

                                        <div class="speaker-info">

                                            <h4 class="name">SMART FAN </h4>

                                            <h3><a href="schedule-detail.html">Votre Eco-ventilateur Antipaludique adapté à votre quotidien</a></h3>

                                            {{-- <div class="location"><strong>Location:</strong> AFRIQUE</div> --}}

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block-three even">

                                <div class="inner-box">



                                    <div class="inner">

                                        <figure class="thumb">

                                            <img src="{{asset('frontend/images/resource/clim.png')}}" alt="">

                                        </figure>

                                        <div class="speaker-info">

                                            <h4 class="name">SMART FRESH</h4>

                                            <h3><a href="schedule-detail.html">Votre Climatiseur antipaludique conçu pour votre confort</a></h3>

                                            <!-- <div class="location"><strong>Location:</strong> Hall 1, Building A , Golden Street , Southafrica</div> -->

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="schedule-block-three">

                                <div class="inner-box">



                                    <div class="inner">

                                        <figure class="thumb">

                                            <img src="{{asset('frontend/images/resource/plafo.png')}}" alt="">

                                        </figure>

                                        <div class="speaker-info">

                                            <h4 class="name">SMART CEILING </h4>

                                            <h3><a href="schedule-detail.html">Du confort en toute simplicité pour des petits budgets </a></h3>

                                            {{-- <div class="location"><strong>Location:</strong> AFRIQUE</div> --}}

                                        </div>

                                    </div>

                                </div>

                            </div>



















                            <!-- schedule Block -->
<!--
                            <div class="schedule-block-three even">

                                <div class="inner-box">

                                    <div class="date">

                                        <span class="icon fa fa-microphone"></span>

                                        <span class="time">12.00 am <br> 01.00 am</span>

                                    </div>

                                    <div class="inner">

                                        <figure class="thumb">

                                            <img src="{{asset('frontend/images/resource/schedule-1.jpg')}}" alt="">

                                        </figure>

                                        <div class="speaker-info">

                                            <h4 class="name">Rene Wells, <span class="designation">Historian</span></h4>

                                            <h3><a href="schedule-detail.html">Developing Force Legislative issues of Arctics Motivation</a></h3>

                                            <div class="location"><strong>Location:</strong> Hall 1, Building A , Golden Street , Southafrica</div>

                                        </div>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>



            <div class="sec-bottom-text"><div class="text">Pour plus d'informations <a href="#">Contactez-nous</a></div></div>

        </div>

    </section>

<!--End schedule Section -->



  

    <!-- News Section -->

    <section class="news-section alternate">

        <div class="auto-container">

            <div class="sec-title text-center">

                <span class="sub-title">Nos atouts</span>

                <h2>Nos atouts</h2>

                <span class="divider"></span>

            </div>



            <div class="row d-flex align-items-stretch">

                <!-- News Block Four -->

                <div class="news-block style-four col-lg-4 col-md-6 col-sm-12 wow fadeInRight d-flex align-items-stretch">

                    <div class="inner-box">

                        <div class="image-box">

                            <span class="tag">Environnemental</span>

                            <figure class="image"  style="text-align:center" ><a href="blog-single.html"><img style="height: 150px; width:250px" src="{{asset('frontend/images/resource/news-1.jpg')}}" alt=""></a></figure>

                        </div>

                        <div class="lower-content mt-3">




                            <h4><a href="blog-single.html">Solution 100% naturelle </a></h4>

                            <div class="text">Fait à base d'huiles essentielles
d’eucalyptus citronnées</div>

                        </div>

                    </div>

                </div>



                <!-- News Block Four -->

                <div class="news-block style-four col-lg-4 col-md-6 col-sm-12 wow fadeInRight d-flex align-items-stretch" data-wow-delay="400ms">

                    <div class="inner-box">

                        <div class="image-box">

                            <span class="tag">Santé</span>

                            <figure class="image"><a href="blog-single.html"><img   style="height: 150px;" src="{{asset('frontend/images/resource/news-2.jpg')}}" alt=""></a></figure>

                        </div>

                        <div class="lower-content mt-3">




                            <h4><a href="blog-single.html ">Favorise le Bien être et la bonne
santé </a></h4>

                            <!-- <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor.</div> -->

                        </div>

                    </div>

                </div>



                <!-- News Block Four -->

                <div class="news-block style-four col-lg-4 col-md-6 col-sm-12 wow fadeInRight d-flex align-items-stretch" data-wow-delay="800ms">

                    <div class="inner-box">

                        <div class="image-box">

                            <span class="tag">Economie</span>

                            <figure class="image"><a href="blog-single.html"><img  style="height: 150px; width:250px" src="{{asset('frontend/images/resource/news-3.jpg')}}" alt=""></a></figure>

                        </div>

                        <div class="lower-content mt-3">



                            <h4><a href="blog-single.html">Entraine une Optimisation
économique et technique </a></h4>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--End News Section -->





    <!-- FAQ's section -->

    <section class="faq-section" style="background-image: url({{asset('frontend/images/background/3.jpg')}});">

        <div class="anim-icons full-width">

            <span class="icon icon-dotted-world left"></span>

            <span class="icon icon-dotted-world right"></span>

        </div>



        <div class="auto-container">

            <div class="sec-title light">

                <span class="sub-title">Some FAQ’s</span>

                <h2>FAQ</h2>

               <span class="divider"></span>

            </div>



            <div class="row">

                <div class="col-lg-6">

                    <!--Accordian Box-->

                    <ul class="accordion-box">

                        <!--Block-->

                        <li class="accordion block active-block">

                            <div class="acc-btn active">Où êtes-vous situés ?  <span class="icon fa fa-plus"></span></div>

                            <div class="acc-content current">

                                <div class="content">

                                    <p>Nous sommes situés à Douala, Capitale Économique du Cameroun. Lieu dit Pk10 - Face Génie Militaire.</p>

                                </div>

                            </div>

                        </li>



                        <!--Block-->

                        <li class="accordion block">

                            <div class="acc-btn"> Comment Fonctionnent vos ventilateurs ?  <span class="icon fa fa-plus"></span></div>

                            <div class="acc-content">

                                <div class="content">

                                    <p>Doté de Capteurs (Objets Connectés), chaque Smart Fan est commandé à distance par une télécommande ou un téléphone grâce aux modules GMS. Il diffuse pendant son fonctionnement une solution répulsive 100% naturelle sans effet sur l’homme, dans l’environnement dans lequel il se trouve afin de neutraliser les moustiques vecteurs de paludisme. Il fonctionne à l’énergie solaire photovoltaïque comme première source d’alimentation.</p>

                                </div>

                            </div>

                        </li>



                        <!--Block-->

                        <li class="accordion block">

                            <div class="acc-btn">Est-il toujours possible d’investir dans le projet ?  <span class="icon fa fa-plus"></span></div>

                            <div class="acc-content">

                                <div class="content">

                                    <p>Oui, c’est toujours possible d’investir dans le projet. Pour cela veuillez contacter directement les promoteurs dans le Menu Contact où vous rendre dans nos bureaux.<br/>
                                        L’investissement peut se faire en capital,  sous forme de prêt ou de Don.</p>

                                </div>

                            </div>

                        </li>



                        <!--Block-->

                        <li class="accordion block">

                            <div class="acc-btn">Comment devenir partenaire / représentant de Smart Fan Technology hors du Cameroun ? <span class="icon fa fa-plus"></span></div>

                            <div class="acc-content">

                                <div class="content">

                                    <p>C’est possible grâce à un protocole d’accord à établir entre vous et les promoteurs du projet. Pour cela veuillez nous envoyer un mail directement via l’onglet Contact ou via <a href="mailto:infos@smartfantechnology.com">infos@smartfantechnology.com</a>.</p>

                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!-- End FAQ's section -->








    <!--Clients Section-->

    <section class="clients-section alternate">

        <div class="auto-container">
            <div class="content-box">
                <div class="sec-title text-center dark">

                    <span class="sub-title">Ils nous font confiance</span>

                    <h2>Nos partenaires</h2>

                    <div class="divider"></div>

                </div>
            </div>

            <div class="row justify-content-center splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- Client Block -->
                        <li class="splide__slide">
                            <div class="wow fadeInRight">

                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/1.jpg')}}" alt=""  style="height : 300px "></a></figure>

                            </div>
                        </li>




                        <li class="splide__slide">
                            <div class="wow fadeInRight" data-wow-delay="300ms">

                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/8.png')}}"  style="height : 300px " alt=""></a></figure>

                            </div>
                        </li>




                        <li class="splide__slide">
                            <div class="wow fadeInRight" data-wow-delay="600ms">

                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/9.jpg')}}" style="height : 300px " alt=""></a></figure>

                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="wow fadeInRight" data-wow-delay="600ms">

                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/10.png')}}" style="height : 300px " alt=""></a></figure>

                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="wow fadeInRight" data-wow-delay="600ms">

                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/11.png')}}" style="max-height : 230px " alt=""></a></figure>

                            </div>
                        </li>
                    </ul>
                </div>




<!--

                <div class="client-block col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="900ms">

                    <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/4.jpg')}}" alt=""></a></figure>

                </div> -->




                <!-- <div class="client-block col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="1200ms">

                    <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/5.jpg')}}" alt=""></a></figure>

                </div> -->




<!--
                <div class="client-block col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="1500ms">

                    <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/6.jpg')}}" alt=""></a></figure>

                </div> -->



<!--

                <div class="client-block col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="1800ms">

                    <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/clients/7.jpg')}}" alt=""></a></figure>

                </div> -->

            </div>

        </div>

    </section>

<!--End Clients Section -->





    <!-- Subscribe Section Two -->

    <section class="subscribe-section-two">

        <div class="auto-container">

            <div class="content-box">

                <div class="sec-title text-center light">

                    <span class="sub-title">Souscription à notre newsletter</span>

                    <h2>Votre adresse mail</h2>

                    <div class="divider"></div>

                </div>



                <div class="newsletter-form-two">

                    <form method="post" action="blog.html">

                        <div class="form-group">

                            <input type="email" name="field-name" value="" placeholder="Inscrivez-Vous a la Newsletter" required>

                            <button type="submit" class="theme-btn btn-style-two"><span class="btn-title">S'inscrire</span></button>

                        </div>

                    </form>

                </div>





            </div>

        </div>

    </section>

    <!--End Subscribe Section Two -->



    <!-- Main Footer -->

    <footer class="main-footer style-two">

        <div class="auto-container">

            <!-- Footer Content -->

            <div class="footer-content wow fadeInUp">

                <div class="text-center">

                    <div class="footer-logo"><a href="#"><img style="width:150px; border-radius: 20px;" src="{{asset('frontend/images/logos.png')}}" alt=""></a></div>

                    <div class="text">Usine de production numérique 4.0 dédiée à la fabrication des ventilateurs intelligents antipaludiques</div>

                </div>

                <ul class="social-icon-two mb-0">

                    <li><a href="https://www.facebook.com/smartfantech"><span class="fab fa-facebook-f"></span></a></li>

                    <li><a href="https://www.linkedin.com/company/smart-fan-technology/"><span class="fab fa-linkedin"></span></a></li>
{{--
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li> --}}

                </ul>

            </div>

        </div>



        <div class="footer-bottom">

            <div class="copyright-text">Copyright © 2022 All Rights Reserved by <a href="#">SMART FAN TECHNOLOGY</a></div>

        </div>

    </footer>

    <!-- End Footer -->





</div>

<!-- End Page Wrapper -->



<!--Scroll to top-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



<!-- Color Palate -->







<script src="{{asset('frontend/js/jquery.js')}}"></script>

<script src="{{asset('frontend/js/popper.min.js')}}"></script>

<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>

<script src="{{asset('frontend/js/jquery.countdown.js')}}"></script>

<script src="{{asset('frontend/js/appear.js')}}"></script>

<script src="{{asset('frontend/js/owl.js')}}"></script>

<script src="{{asset('frontend/js/wow.js')}}"></script>

<script src="{{asset('frontend/js/script.js')}}"></script>

<!-- Color Setting -->

<script src="{{asset('frontend/js/color-settings.js')}}"></script>

<script src="{{asset('frontend/dist/js/splide.min.js')}}"></script>

<script>
    var splide = new Splide( '.splide', {
  type    : 'loop',
  perPage : 3,
  autoplay: true,
} );

splide.mount();
</script>

</body>

</html>

