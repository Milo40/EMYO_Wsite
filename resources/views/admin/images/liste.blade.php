@extends('layouts.admin.admin')

@section('title')

Liste d'images

@endsection

@section('icon')

fas fa-image

@endsection

@section('entity')
Liste d'images

@endsection

@foreach($images as $img_item)
<div class="modal fade mt-5" id="check_{{$img_item->id}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <label for="legende" class="h4">Legende</label>
                            <input type="text" class="form-control" id="legende" value="{{ $img_item->legende }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2 mb-1">
                        <div class="col">
                            <label for="img" class="h4">Image</label><br>
                            <center>
                            <img id="img" class="w-75 h-auto" src="{{ url('storage/galerie/'.$img_item->libelle) }}"></img>
                            </center>
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
                <h5 class="card-title"> Liste d'images </h5>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="width:  30%">Aperçu</th>
                            <th style="width:  50%">Légende</th>
                            <th style="width:  20%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($images as $img)
                        <tr>
                            <th scope="row">{{ $img->id }}</th>
                            <td>{{ $img->libelle }}</td>
                            <td>{{ $img->legende}}</td>
                            <td>
                                <div class="d-flex justify-content-center">

                                    <div class="col">
                                        <form action="#">
                                            <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$img->id}}" value="&#xf06e">
                                        </form>
                                    </div>

                                    <div class="col">
                                        <form action="{{ route('Supprimer une image', ['img'=>$img->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="img" value="{{ $img->id }}" readonly>
                                            <input type="submit" class="btn btn-danger m-1" style="width: 100%;" value="&#xf146">
                                        </form>
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