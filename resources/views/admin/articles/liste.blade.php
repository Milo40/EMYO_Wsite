@extends('layouts.admin.admin')

@section('title')

Liste d'articles

@endsection

@section('icon')

fas fa-newspaper

@endsection

@section('entity')

Liste d'articles

@endsection

@foreach($arts as $art_item)
<div class="modal fade" id="check_{{$art_item->id_article}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <input type="text" class="form-control" id="titre" value="{{ $art_item->titre }}" readonly>
                        </div>

                        <div class="col">
                            <label for="banniere" class="h4">Banniere</label>
                            <input type="text" class="form-control" id="banniere" value="{{ $art_item->banniere }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="img" class="h4">Image Banniere</label><br>
                            <center>
                            <img id="img" class="w-100 h-auto" src="{{ url('storage/Articles_Banners/'.$art_item->banniere) }}"></img>
                            </center>
                        </div>
                    </div>

                    <div class="row w-100 mt-2 mb-1">
                        <div class="col">
                            <label for="contenu" class="h4">Contenu</label><br>
                            <iframe id="contenu" class="w-100 h-auto" srcdoc="{{ $art_item->contenu }}">
                            </iframe>
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
                <h5 class="card-title"> Liste d'articles </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  20%">Titre</th>
                            <th style="width:  50%">Contenu</th>
                            <th style="width:  15%">Banniere </th>
                            <th style="width:  11%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($arts as $art_item)
                        <tr>
                            <th scope="row">{{ $art_item->id_article }}</th>
                            <td>{{ $art_item->titre }}</td>
                            <td>{{ $art_item->contenu }}</td>
                            <td>{{ $art_item->banniere }}</td>
                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center align-items-center no-gutters d-flex">
                                        <div class="col-4">
                                            <form action="#">
                                                <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$art_item->id_article}}" value="&#xf06e">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Modifier un article', ['art'=>$art_item->id_article]) }}" method="GET">
                                                @csrf
                                                <input type="hidden" name="art" value="{{ $art_item->id_article }}" readonly>
                                                <input type="submit" class="btn btn-warning m-1" style="width: 100%;" value="&#xf044">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Supprimer un article', ['art'=>$art_item->id_article]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="art" value="{{ $art_item->id_article }}" readonly>
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