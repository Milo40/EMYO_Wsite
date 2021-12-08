@extends('layouts.welcome')

@section('blog')
active
@endsection

@section('wcontent')

<section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex">

        @forelse ($articles as $article)

        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
              <span  class="block-20" style="background-image: url('/storage/articles/{{$article->banniere}}');">
              </span>
              <div class="text p-4 float-right d-block">
                  <div class="topper d-flex align-items-center">
                      <div class="one py-2 pl-3 pr-1 align-self-stretch">
                          <span class="day">{{ date('d', strtotime($article->created_at)) }}</span>
                      </div>
                      <div class="two pl-0 pr-3 py-2 align-self-stretch">
                          <span class="yr">{{ date('Y', strtotime($article->created_at)) }}</span>
                          @php
                              \Carbon\Carbon::setLocale('fr');
                          @endphp
                          <span class="mos">{{ $article->created_at->translatedFormat('F') }}</span>
                      </div>
                  </div>
                  <h3 class="heading mb-0"><a href="/article/{{ $article->id_article }}">{{ $article->titre }}</a></h3>
                  {!! \Illuminate\Support\Str::limit($article->contenu, 150, $end='...') !!}
                  
              </div>
          </div>
      </div>

      @empty
                   <div class="col-md-12 d-flex ftco-animate" style="justify-content:center!important;">

                    <div class="blog-entry justify-content-end">
                      
                          <h3 class="text-muted">Aucun article de titre n'a été trouvé</h3>
            
                           
                    </div>
                </div>

      @endforelse


      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            @if ($articles->hasPages())
            <ul>
              @if ($articles->onFirstPage())

              <li class="disabled">&lt;</li>

              @else

              <li class="disabled"><a href="{{ $articles->previousPageUrl() }}" >&lt;</a></li>

              @endif

              @foreach ($articles as $article)

              @if (is_string($article))
                <li class="disabled"><span>{{ $article }}</span></li>
              @endif

              @if (is_array($article))
                @foreach ($element as $page => $url)
                    @if ($page == $articles->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif

              @endforeach

              @if ($articles->hasMorePages())

              <li><a href="{{ $articles->nextPageUrl() }}">&gt;</a></li>

              @else

              <li class="disabled">&gt;</li>

              @endif
            </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>


 @endsection


@section('title')

Resultat recherche
    
@endsection