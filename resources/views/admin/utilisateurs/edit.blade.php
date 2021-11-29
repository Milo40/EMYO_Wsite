@extends('layouts.admin.admin')

@section('title')

Editer un utilisateur

@endsection

@section('icon')

    fas fa-users

@endsection

@section('entity')

    Editer un utilisateur

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
                        <div class="position-relative form-group"><label for="example4" class="">Mot de passe</label><input name="password" id="example4"  type="password" class="form-control"></div>
                        
                        <div class="position-relative form-group"><label for="example5" class="">Confirmation du mot de passe</label><input name="repassword" id="example5"  type="password" class="form-control"></div>
                        <button class="mt-1 btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>

@endsection
