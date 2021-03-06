@extends('layouts.admin.admin')

@section('title')

Ajouter un produit

@endsection

@section('icon')

fas fa-tshirt

@endsection

@section('entity')

Ajouter un produit

@endsection

@section('content')

@include('status_messages')

<form class="add_product_form" method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Produit</h5>
                    <form class="">
                        <div class="position-relative form-group"><label for="exampleEmail" class="">Nom</label><input name="nom" id="exampleEmail" type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label for="example1" class="">Description</label><input name="description" id="example1" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="image" class="">Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>
                        <button type="submit" class="mt-1 btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</form>

@endsection