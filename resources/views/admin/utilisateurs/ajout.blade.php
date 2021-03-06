@extends('layouts.admin.admin')

@section('title')

Ajouter un utilisateur

@endsection

@section('icon')

    fas fa-users

@endsection

@section('entity')

    Ajouter un utilisateur

@endsection

@section('content')

@include('status_messages')

<form class="add_user_form" method="POST" action="{{ url()->current() }}">
    @csrf

    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Utilisateur</h5>

                    <form class="">
                        <div class="position-relative form-group"><label for="example1" class="">Nom</label><input name="nom" id="example1"  type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="example2" class="">Pseudo</label><input name="pseudo" id="example2"  type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="example3" class="">Email</label><input name="email" id="example3"  type="email" class="form-control"></div>
                        <div class="position-relative form-group"><label for="example5" class="">Role</label>
                            
                            <select name="role" id="example5"  class="form-control">

                                <option value="admin">Administrateur</option>
                                <option value="client">Client</option>

                            </select> 
                        
                        </div>
                        <div class="position-relative form-group"><label for="example4" class="">Mot de passe</label><input name="password" id="example4"  type="password" class="form-control"></div>
    
                        <div class="position-relative form-group"><label for="example5" class="">Confirmation du mot de passe</label><input name="repassword" id="example5"  type="password" class="form-control"></div>
                        <button type="submit" class="mt-1 btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
</form>

@endsection
