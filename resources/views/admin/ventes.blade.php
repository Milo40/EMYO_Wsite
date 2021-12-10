@extends('layouts.admin.admin')

@section('title')

Ventes

@endsection

@section('icon')

fas fa-cash-register

@endsection

@section('entity')

Ventes

@endsection

@php($x = 0)
@foreach($ventes as $vente_item)
<div class="modal fade mt-5" id="check_{{$vente_item->id_vente}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <label for="nom" class="h4">Client</label>
                            <input type="text" class="form-control" id="nom" value="{{ $vente_client[$x] }}" readonly>
                        </div>

                        <div class="col">
                            <label for="prod" class="h4">Produit</label>
                            <input type="text" class="form-control" id="prod" value="{{ $vente_produit[$x] }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="day" class="h4">Date Vente</label>
                            <input type="text" class="form-control" id="day" value="{{ $vente_item->date }}" readonly>
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

@php($x = $x + 1)
@endforeach

@section('content')

@include('status_messages')

<div class="row">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title"> Ventes </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  30%;">Client</th>
                            <th style="width:  30%;">Produit </th>
                            <th style="width:  20%;">Date</th>
                            <th style="width:  20%;">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php($x = 0)
                        @foreach($ventes as $vente_item)
                        <tr>
                            <th scope="row">{{ $vente_item->id_vente }}</th>
                            <td>{{ $vente_client[$x] }}</td>
                            <td>{{ $vente_produit[$x] }}</td>
                            <td>{{ $vente_item->date }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                <div class="col">
                                        <form action="#">
                                            <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$vente_item->id_vente}}" value="&#xf06e">
                                        </form>
                                    </div>

                                    <div class="col">
                                    <form action="{{ route('Supprimer une vente', ['vente'=>$vente_item->id_vente]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="vente" value="{{ $vente_item->id_vente }}" readonly>
                                        <input type="submit" class="btn btn-danger m-1" style="width: 100%;" value="&#xf146">
                                    </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @php($x = $x + 1)
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection