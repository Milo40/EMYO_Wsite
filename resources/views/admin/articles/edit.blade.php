@extends('layouts.admin.admin')

@section('title')

Editer une article

@endsection

@section('icon')

fas fa-newspaper

@endsection

@section('entity')

Editer un article

@endsection

@section('content')

@include('status_messages')

<div class="row">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Article</h5>
                <form class="edit_article_form" method="POST" action="{{ route('Modif un article', ['art'=>$arts->id_article]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="art" value="{{ $arts->id_article }}" readonly>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Titre</label>
                        <input name="titre" id="exampleEmail" type="text" class="form-control" placeholder="{{ $arts->titre }}">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleText" class="">Contenu</label>
                        <textarea name="contenu" id="exampleText" class="form-control" placeholder="{{ $arts->contenu }}">
                            </textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleFile" class="">Banniere</label>
                        <input name="banniere" id="exampleFile" type="file" class="form-control-file">
                    </div>
                    <button class="mt-1 btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection