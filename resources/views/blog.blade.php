@extends('layouts.welcome')

@section('blog')
active
@endsection

@section('wcontent')

<section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="blog-single.html" class="block-20" style="background-image: url('/index/images/image_6.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
                <div class="topper d-flex align-items-center">
                    <div class="one py-2 pl-3 pr-1 align-self-stretch">
                        <span class="day">24</span>
                    </div>
                    <div class="two pl-0 pr-3 py-2 align-self-stretch">
                        <span class="yr">2020</span>
                        <span class="mos">Janvier</span>
                    </div>
                </div>
                <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary"> Voir plus...</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


 @endsection


@section('title')

Blog
    
@endsection