@extends('layouts.welcome')

@section('home')
active
@endsection

@section('wcontent')


<div class="hero-wrap js-fullheight" style="background-image:url(/index/images/plant.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading"> Soyez les bienvenus chez </h2>
                <h1>EMERGENCE YOUTH SARL </h1>
                <p class="mb-1"> <i class="fas fa-check-circle mr-2"></i>Cabinet de consulting environnemental</p>
                <p class="mb-1"><i class="fas fa-check-circle mr-2"></i>Promotion et sensiblisation des jeunes sur
                    l'entrepeneuriat environnemental</p>
                <p class="mb-4"><i class="fas fa-check-circle mr-2"></i>Incubation et recherche de financement pour
                    les projets jeunes sélectionnés</p>
                <p><a href="#1" class="btn btn-primary mr-md-4 py-2 px-4">En savoir plus <span
                            class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt" id="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 py-5 order-md-last">
                <div class="heading-section ftco-animate">
                    <h2 class="mb-4">Missions et objectifs</h2>
                    <p>Avec la préoccupation constante de placer l'environnement au cœur de toutes nos actions, nos principales missions sont</p>
            
                </div>
            </div>
            <div class="col-lg-9 services-wrap px-4 pt-5">
                <div class="row pt-md-3">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-hand-holding-medical"></span>
                            </div>
                            <div class="text">
                                <h3>Protection de l'environnement</h3>
                                <p>Faire de l’environnemental un pilier de
                                    développement durable.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-plus-square"></span>
                            </div>
                            <div class="text">
                                <h3>Promotion de l'entrepreneuriat jeune</h3>
                                <p>Apporter notre appui aux jeunes
                                    détenteurs d’une idée de projet et ou
                                    start-up </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-hands-helping"></span>
                            </div>
                            <div class="text">
                                <h3>Valorisation du patrimoine culturel</h3>
                                <p>Amener les populations à se réapproprier leur patrimoine tout en contribuant à
                                    leur développement économique et social</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
                    style="background-image:url(/index/images/vid2.jpg);">
                    <a href="/index/videos/presentation.mp4"
                        class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="row justify-content-start py-5">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Nos activités</h2>
                        <p>Nous proposons
                        </p>
                        <div class="services-wrap">
                            <a href="#" class="services-list">Formation dans des aspects du développement
                                durable et entrepreneurial

                            </a>
                            <a href="#" class="services-list">Consulting en stratégies sur le suivi des
                                objectifs du développement durable

                            </a>
                            <a href="#" class="services-list">Incubations plus recherches de financements

                            </a>
                            <a href="#" class="services-list">Réseautages

                            </a>
                            <a href="#" class="services-list">Stages académiques et professionnelles

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <h2 class="mb-4">Galerie</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-seasonal owl-carousel ftco-owl">
                    <div class="item">
                        <div class="wrap">
                            <div class="seasonal img d-flex align-items-center justify-content-center"
                                style="background-image: url(/index/images/galerie1.jpeg);">
                            </div>
                            <!--	<div class="text text-center px-4">
                            <h3><a href="#">Spring</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="seasonal img d-flex align-items-center justify-content-center"
                                style="background-image: url(/index/images/galerie2.jpeg);">
                            </div>
                            <!--	<div class="text text-center px-4">
                            <h3><a href="#">Spring</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="seasonal img d-flex align-items-center justify-content-center"
                                style="background-image: url(/index/images/galerie3.jpeg);">
                            </div>
                            <!--	<div class="text text-center px-4">
                            <h3><a href="#">Spring</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="seasonal img d-flex align-items-center justify-content-center"
                                style="background-image: url(/index/images/galerie4.jpeg);">
                            </div>
                            <!--	<div class="text text-center px-4">
                            <h3><a href="#">Spring</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro bg-primary py-5">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <h2>Contact</h2>
                <p>Un commentaire ? une question à propos d'un de nos produits ? alors contactez-nous </p>
            </div>
            <div class="col-md-5 text-md-right">
                <span class="contact-number">+237 654568940</span>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Articles récents</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="" class="block-20" style="background-image: url('/index/images/image_1.jpg');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">21</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">2020</span>
                                <span class="mos">Janvier</span>
                            </div>
                        </div>
                        <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="#" class="btn btn-primary">Voir plus...</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('/index/images/image_2.jpg');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">22</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">2020</span>
                                <span class="mos">Janvier</span>
                            </div>
                        </div>
                        <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="#" class="btn btn-primary">Voir plus...</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('/index/images/image_3.jpg');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">23</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">2020</span>
                                <span class="mos">Janvier</span>
                            </div>
                        </div>
                        <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="#" class="btn btn-primary">Voir plus...</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('title')

Dynamique, professionnel et écologique
    
@endsection