@extends('layouts.admin.admin')

@section('title')

Mon profil

@endsection

@section('icon')

    fas fa-user

@endsection

@section('entity')

    Mon profil

@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Utilisateur</h5>

                    <form class="">
                        <div class="position-relative form-group"><label for="example1" class="">Nom</label><input name="nom" id="example1"  type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="example2" class="">Pseudo</label><input name="pseudo" id="example2"  type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="example3" class="">Email</label><input name="email" id="example3"  type="email" class="form-control"></div>
                       <button class="mt-1 btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>

@endsection
