@extends('layouts.admin.admin')

@section('title')

Editer un produit

@endsection

@section('icon')

    fas fa-tshirt

@endsection

@section('entity')

    Editer un produit

@endsection

@section('content')

@include('status_messages')

    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Produit</h5>
                <form class="edit_produit_form" method="POST" action="{{ route('Modif un produit', ['prod'=>$prods->id_produit]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="prod" value="{{ $prods->id_produit }}" readonly>
                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Nom</label>
                            <input name="nom" id="exampleEmail"  type="text" class="form-control" placeholder="{{ $prods->nom }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="Text" class="">Prix</label>
                            <input name="prix" id="Text" type="text" class="form-control" placeholder="{{ $prods->prix }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="example1" class="">Description</label>
                            <input name="description" id="example1" type="text" class="form-control" placeholder="{{ $prods->description }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="example2" class="">Image</label>
                            <input name="image" id="example2" type="file" class="form-control-file">
                        </div>
                        <div class="position-relative form-group">
                            <label for="example3" class="">Reserve ?</label>
                            
                            <select name="reserve" id="example3"  class="form-control">

                                <option value="0">Non</option>
                                <option value="1">Oui</option>

                            </select>

                        </div>
                        <button class="mt-1 btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

@endsection
