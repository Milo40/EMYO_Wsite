@extends('layouts.admin.admin')

@section('title')

Liste de produits

@endsection

@section('icon')

fas fa-tshirt

@endsection

@section('entity')

Liste de produits

@endsection

@foreach($prods as $prod_item)
<div class="modal fade mt-5" id="check_{{$prod_item->id_produit}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Plus de details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container w-100">

                    <div class="row w-100">
                        <div class="col">
                            <label for="nom" class="h4">Nom</label>
                            <input type="text" class="form-control" id="nom" value="{{ $prod_item->nom }}" readonly>
                        </div>

                        <div class="col">
                            <label for="prix" class="h4">Prix</label>
                            <input type="text" class="form-control" id="prix" value="{{ $prod_item->prix.' XAF' }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="description" class="h4">Description</label><br>
                            <textarea id="description" class="w-100 h-50 form-control text-wrap" readonly>{{ $prod_item->description }}</textarea>
                        </div>
                        <div class="col">
                            <label for="img" class="h4">Image</label><br>
                            <center>
                                <img id="img" class="w-100 h-auto" src="{{ url('storage/Products_Images/'.$prod_item->image) }}"></img>
                            </center>
                        </div>
                    </div>

                    <div class="row w-100 mt-2 mb-1">
                        <label for="is_reserve" class="h4">Reservé ?</label>
                        <input type="text" class="form-control" id="is_reserve" value="{{ $prod_item->is_reserve }}" readonly>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@section('content')

@include('status_messages')

<div class="row">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title"> Liste de produits </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  20%">Nom</th>
                            <th style="width:  30%">Description</th>
                            <th style="width:  10%">Image</th>
                            <th style="width:  11%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($prods as $prod_item)
                        <tr>
                            <th scope="row">{{ $prod_item->id_produit }}</th>
                            <td>{{ $prod_item->nom }}</td>
                            <td>{{ $prod_item->description }}</td>
                            <td>{{ $prod_item->image }}</td>
                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center align-items-center no-gutters d-flex">
                                    <div class="col-4">
                                            <form action="#">
                                                <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$prod_item->id_produit}}" value="&#xf06e">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Modifier un produit', ['prod'=>$prod_item->id_produit]) }}" method="GET">
                                                @csrf
                                                <input type="hidden" name="prod" value="{{ $prod_item->id_produit }}" readonly>
                                                <input type="submit" class="btn btn-warning m-1" style="width: 100%;" value="&#xf044">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Supprimer un produit', ['prod'=>$prod_item->id_produit]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="prod" value="{{ $prod_item->id_produit }}" readonly>
                                                <input type="submit" class="btn btn-danger m-1" style="width: 100%;" value="&#xf146">
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

@endsection