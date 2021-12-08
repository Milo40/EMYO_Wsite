@extends('layouts.admin.admin')

@section('title')

Editer une catégorie

@endsection

@section('icon')

    fas fa-filter

@endsection

@section('entity')

    Editer une catégorie

@endsection

@section('content')

@include('status_messages')

    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Catégorie</h5>
                <form class="edit_category_form" method="POST" action="{{ route('Modif une categorie', ['cat'=>$cats->id_categorie]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="cat" value="{{ $cats->id_categorie }}" readonly>
                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Titre</label>
                            <input name="titre" id="exampleEmail" type="text" class="form-control" placeholder="{{ $cats->titre }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="Text" class="">Description</label>
                            <textarea name="description" id="Text" class="form-control" placeholder="{{ $cats->description }}">
                            </textarea>
                        </div>
                        
                        <button class="mt-1 btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        

    </div>

@endsection
