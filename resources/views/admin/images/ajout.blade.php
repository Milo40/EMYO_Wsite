@extends('layouts.admin.admin')

@section('title')

Ajouter une image

@endsection

@section('icon')

fas fa-image

@endsection

@section('entity')

Ajouter une image

@endsection

@section('content')

@include('status_messages')

 <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Image</h5>
                    <form method="POST" action="/admin/image/add_image" enctype="multipart/form-data">
                        @csrf
                         <label for="exampleEmail" class="">Légende</label><input name="legende" id="exampleEmail" type="text" class="form-control">
                         <label for="exampleFile" class="">Libelle</label><input name="libelle" id="exampleFile" type="file" class="form-control-file">
                       <button type="submit" class="mt-1 btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection