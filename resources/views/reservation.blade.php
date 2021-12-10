@extends('layouts.welcome')
@section('boutique')

    active

@endsection

@section('wcontent')
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
                                    <h3 class="mb-4">Formulaire de réservation</h3>
                                    <div id="form-message-warning" class="mb-4">@include('status_messages')</div>
                                    <form method="POST" action="/admin/reservation" id="contactForm" name="contactForm" class="contactForm">
                                        @csrf
                                      <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Nom complet</label>
                                                <input type="text" class="form-control" name="nom" id="subject"  placeholder="Nom" required>
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Numéro de téléphone</label>
                                                    <input type="number" class="form-control" name="numero" id="name"  placeholder="Numéro" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="label" for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            
                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Quel model voulez-vous ?</label>
                                                    <textarea name="pref" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
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
                                <div class="info-wrap  p-5 img">

                                    <img src="/shop/img/test.png" alt="logo"
                                    style="width:500px;text-shadow: 5px 5px 21px 4px rgba(0,0,0,0.59);">
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

Formulaire de reservation

@endsection
