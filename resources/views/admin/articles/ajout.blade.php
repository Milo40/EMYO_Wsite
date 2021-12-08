@extends('layouts.admin.admin')

@section('title')

Ajouter une article

@endsection

@section('icon')

fas fa-newspaper

@endsection

@section('entity')

Ajouter un article

@endsection

@section('content')

@include('status_messages')

<form class="add_article_form" method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Article</h5>
                    <form class="">
                        <div class="position-relative form-group"><label for="exampleEmail" class="">Titre</label><input name="titre" id="exampleEmail" type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="exampleText" class="">Contenu</label><textarea name="contenu" id="exampleText" class="form-control"></textarea></div>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Banniere</label><input name="banniere" id="banniere" type="file" class="form-control-file">
                        </div>

                        <button type="submit" class="mt-1 btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</form>

@endsection