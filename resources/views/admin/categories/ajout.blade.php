@extends('layouts.admin.admin')

@section('title')

Ajouter une catégorie

@endsection

@section('icon')

    fas fa-filter

@endsection

@section('entity')

    Ajouter une catégorie

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Catégorie</h5>
                    <form class="">
                        <div class="position-relative form-group"><label for="exampleEmail" class="">Titre</label><input name="titre" id="exampleEmail" type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="Text" class="">Description</label><textarea name="description" id="Text" class="form-control"></textarea></div>
                        
                        <button class="mt-1 btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        

    </div>

@endsection
