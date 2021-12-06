@extends('layouts.welcome')

@section('boutique')
    
active

@endsection

@section('wcontent')
 <div class="hero-wrap js-fullheight" style="background-image:url(/shop/img/banner6.png);"
    >
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            >
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading"> Soyez les bienvenus chez </h2>
                <h1>EMERGENCE YOUTH SARL </h1>
                <p class="mb-1"> <i class="fas fa-check-circle mr-2"></i>Cabinet de consulting environnemental
                </p>
                <p class="mb-1"><i class="fas fa-check-circle mr-2"></i>Promotion et sensiblisation des jeunes
                    sur
                    l'entrepeneuriat environnemental</p>
                <p class="mb-4"><i class="fas fa-check-circle mr-2"></i>Incubation et recherche de financement
                    pour
                    les projets jeunes sélectionnés</p>
            </div>

            <div class="col-md-6 ftco-animate" style="margin:-150px -20px;padding:-100px;">
              
              
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/shop/img/banner5.png" alt="logo" style="width:600px;text-shadow: 5px 5px 21px 4px rgba(0,0,0,0.59);">
             
                  </div>
                  <div class="carousel-item">
                    <img src="/shop/img/banner4.png" alt="logo" style="width:600px;text-shadow: 5px 5px 21px 4px rgba(0,0,0,0.59);">
             
                  </div>
                  <div class="carousel-item">
                    <img src="/shop/img/banner2.png" alt="logo" style="width:600px;text-shadow: 5px 5px 21px 4px rgba(0,0,0,0.59);">
             
                  </div>
                  <div class="carousel-item">
                    <img src="/shop/img/banner3.png" alt="logo" style="width:600px;text-shadow: 5px 5px 21px 4px rgba(0,0,0,0.59);">
             
                  </div>
                </div>
              </div>
          </div>

        </div>
    </div>
</div>

 @endsection


@section('title')

Nos produits
    
@endsection