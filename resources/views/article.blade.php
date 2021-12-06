@extends('layouts.welcome')

@section('blog')
active
@endsection

@section('wcontent')

<section class="hero-wrap hero-wrap-2" style="background-image: url(/index/images/vid1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">{{$article->titre}}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/blog">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$article->titre}} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
            <p>
            <img src="/storage/articles/{{$article->banniere}}" alt="banniere" class="img-fluid">
          </p>
          <h2 class="mb-3">{{$article->titre}}</h2>
          {!!$article->contenu!!}
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
          <div class="sidebar-box">
            <form action="/recherche" method="post" class="search-form">
              @csrf
                
                <input type="text" name="titre" class="form-control" placeholder="Entrez le titre de l'article">
              
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <h3>Articles Récents</h3>
            @forelse ($articles as $art)
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(/index/images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="/article/{{$art->id_article}}">{{$art->titre}}</a></h3>
                <div class="meta">
                  <div><span class="icon-calendar"></span> {{$art->created_at->translatedFormat('M')}}. {{$art->created_at->format('d')}}, {{$art->created_at->format('Y')}}</div>
                  <div><span class="icon-person"></span> Admin</div>
                </div>
              </div>
            </div>

            @empty

            Rien à afficher
                
            @endforelse

          </div>
        </div>

      </div>
    </div>
  </section> <!-- .section -->

@endsection


@section('title')

{{$article->titre}}
    
@endsection