@extends('layouts.welcome')

@section('style')

<style>

.align-items-stretch img:hover{

    transform: scale(1.1);
    transition: 0.2s ease-in-out;

}

</style>

@endsection

@section('boutique')

    active

@endsection

@section('wcontent')

    <div class="hero-wrap js-fullheight" style="background-image:url(/shop/img/banner6.png);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
                <div class="col-md-6 ftco-animate">
                    <h2 class="subheading"> Soyez les bienvenus </h2>
                    <h1>Découvrez notre catalogue spécial CAN ! </h1>
                    
                    <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Effectuer une reservation <span
                        class="ion-ios-arrow-forward"></span></a></p>

                </div>

                <div class="col-6 d-none d-md-inline ftco-animate" style="margin:-150px -20px;padding:-100px;">

                    <img src="/shop/img/test.png" alt="logo"
                        style="width:600px;text-shadow: 5px 5px 21px 4px rgba(0,0,0,0.59);">

                </div>

            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt" id="1">
        <div class="container">
            <div class="row">

                <div class="col-md-12 d-flex ftco-animate mt-5" style="justify-content:center!important;">

                    <div class="blog-entry heading-section justify-content-end">

                        <h2>Illustrations</h2>


                    </div>
                </div>

                <div class="col-lg-12 services-wrap px-4">
                    <div class="carousel-seasonal owl-carousel ftco-owl">


                        <div class="item">
                            <div class="wrap">
                                <div class="seasonal img d-flex align-items-center justify-content-center"
                                    style="background-image: url(/shop/img/produit1.png);">
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
                                    style="background-image: url(/shop/img/produit2.png);">
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
                                    style="background-image: url(/shop/img/produit3.png);">
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
                                    style="background-image: url(/shop/img/produit4.png);">
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
                                    style="background-image: url(/shop/img/produit5.png);">
                                </div>
                                <!--	<div class="text text-center px-4">
                            <h3><a href="#">Spring</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 d-flex ftco-animate mt-5" style="justify-content:center!important;">

                    <div class="blog-entry heading-section justify-content-end">

                        <h2>Catalogue</h2>


                    </div>
                </div>
<div  class="row">

    <div class="col-md-4 d-flex align-items-stretch">

        <img src="/shop/img/habit1.jpg" alt="Habit 1" class="w-100">

    </div>

    <div class="col-md-4 d-flex align-items-stretch">

        <img src="/shop/img/habit2.jpg" alt="Habit 1" class="w-100">

    </div>


    <div class="col-md-4 d-flex align-items-stretch">

        <img src="/shop/img/habit3.jpg" alt="Habit 1" class="w-100">

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
                    <p>Un commentaire ? Une question à propos d'un de nos produits ? Contactez-nous </p>
                </div>
                <div class="col-md-5 text-md-right">
                    <span class="contact-number">+237 654568940</span>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('title')

    Boutique

@endsection
