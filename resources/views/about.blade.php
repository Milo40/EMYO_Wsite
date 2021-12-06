@extends('layouts.welcome')

@section('about')
active
@endsection

@section('wcontent')


<section class="hero-wrap hero-wrap-2" style="background-image: url('/index/images/vid1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">A propos</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
     
  <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
      <div class="container">
          <div class="row d-flex">
              <div class="col-md-6 d-flex">
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(/index/images/vid4.jpg);">
                    
                  </div>
              </div>
              <div class="col-md-6 pl-md-5">
                  <div class="row justify-content-start py-5">
                <div class="col-md-12 heading-section ftco-animate">
                  <h2 class="mb-4">Historique</h2>
                  <div class="services-wrap">
                     <p>
                       <span style="color: #4e9525;">Emergence Youth (EMYO Sarl)</span>  est une
                        entreprise qui, habitée par l’idée de
                        promouvoir un développement durable,
                        centre ses activités dans le domaine
                        écologique et celui du recyclage. En
                        effet, la structure accompagne les
                        jeunes porteurs de projet, les start-up,
                        entreprises et autres avec des conseils
                        en stratégies sur le suivi des objectifs
                        du développement durable, recherche
                        de financement et un accompagnement
                        pour leur réalisation.
                        En outre,  <span style="color: #4e9525;">Emergence Youth (EMYO Sarl)</span>
                        recycles des déchets organiques et
                        plastiques considérer comme matière
                        première, pour produits de la valeur
                        ajoutée et ceci à travers des procédés
                        de plus en plus aboutis.
                        <span style="color: #4e9525;">Emergence Youth (EMYO Sarl)</span> voit le
                        jour en 2016 et au fil du temps ne cesse
                        d’évoluer.
                     </p>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
  </section>

@endsection


@section('title')

A propos
    
@endsection