@extends('layouts.admin.admin')

@section('title')

Liste de catégories

@endsection

@section('icon')

fas fa-filter

@endsection

@section('entity')

Liste de catégories

@endsection

@foreach($cats as $cat_item)
<div class="modal fade mt-5" id="check_{{$cat_item->id_categorie}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <label for="titre" class="h4">Titre</label>
                            <input type="text" class="form-control" id="titre" value="{{ $cat_item->titre }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2 mb-1">
                        <div class="col">
                            <label for="description" class="h4">Description</label><br>
                            <textarea id="description" class="w-100 h-auto form-control" readonly>{{ $cat_item->description }}</textarea>
                        </div>
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
                <h5 class="card-title"> Liste de catégories </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  30%">Titre</th>
                            <th style="width:  50%">Description</th>
                            <th style="width:  11%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($cats as $cat_item)
                        <tr>
                            <th scope="row">{{ $cat_item->id_categorie }}</th>
                            <td>{{ $cat_item->titre }}</td>
                            <td>{{ $cat_item->description }}</td>
                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center align-items-center no-gutters d-flex">
                                        <div class="col-4">
                                            <form action="#">
                                                <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$cat_item->id_categorie}}" value="&#xf06e">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Modifier une categorie', ['cat'=>$cat_item->id_categorie]) }}" method="GET">
                                                @csrf
                                                <input type="hidden" name="cat" value="{{ $cat_item->id_categorie }}" readonly>
                                                <input type="submit" class="btn btn-warning m-1" style="width: 100%;" value="&#xf044">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Supprimer une categorie', ['cat'=>$cat_item->id_categorie]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="cat" value="{{ $cat_item->id_categorie }}" readonly>
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