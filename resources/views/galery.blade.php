@extends('layouts.welcome')

@section('galery')
active
@endsection

@section('wcontent')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/index/images/vid1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Galerie</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Galerie <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
     
      <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-md-0">
      <div class="row no-gutters">
        <div class="col-md-4 ftco-animate">
          <div class="gallery img d-flex align-items-end" style="background-image: url(/index/images/gallery-6.jpg);">
              <a href="/index/images/gallery-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Nature</span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
      </section>
      @endsection


@section('title')

Galerie
    
@endsection