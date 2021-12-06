@extends('layouts.welcome')

@section('contact')
active
@endsection

@section('wcontent')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/index/images/vid1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Contact</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
     
      <section class="ftco-section bg-light">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="wrapper">
                          <div class="row mb-5">
                              <div class="col-md-4">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-map-marker"></span>
                              </div>
                              <div class="text">
                              <p><span>Adresse:</span> Yaoundé  Mokolo en bas, Immeuble Pharmacie Royale</p>
                            </div>
                        </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-phone"></span>
                              </div>
                              <div class="text">
                              <p><span>Téléphone:</span> <a href="tel://+237654568940">+237 654568940</a></p>
                            </div>
                        </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-paper-plane"></span>
                              </div>
                              <div class="text">
                              <p><span>Email:</span> <a href="mailto:emyo.consulting.enviro@gmail.com">emyo.consulting.enviro@gmail.com</a></p>
                            </div>
                        </div>
                              </div>
                          </div>
                          <div class="row no-gutters">
                              <div class="col-md-7">
                                  <div class="contact-wrap w-100 p-md-5 p-4">
                                      <h3 class="mb-4">Formulaire</h3>
                                      <div id="form-message-warning" class="mb-4">@include('status_messages')</div>
                                      <form method="POST" action="/admin/message" id="contactForm" name="contactForm" class="contactForm">
                                          @csrf
                                        <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="label" for="name">Nom complet</label>
                                                      <input type="text" class="form-control" name="nom" id="name" placeholder="Nom">
                                                  </div>
                                              </div>
                                              <div class="col-md-6"> 
                                                  <div class="form-group">
                                                      <label class="label" for="email">Email</label>
                                                      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label class="label" for="subject">Objet</label>
                                                      <input type="text" class="form-control" name="objet" id="subject" placeholder="Objet">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label class="label" for="#">Message</label>
                                                      <textarea name="contenu" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="submit" value="Envoyer" class="btn btn-primary">
                                                      <div class="submitting"></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-5 d-flex align-items-stretch">
                                  <div class="info-wrap w-100 p-5 img" style="background-image: url(/index/images/vid2.jpg);">
                        </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> 
   
@endsection


@section('title')

Formulaie de contact
    
@endsection