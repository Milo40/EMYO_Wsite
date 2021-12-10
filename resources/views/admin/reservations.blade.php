@extends('layouts.admin.admin')

@section('title')

Reservations

@endsection

@section('icon')

fas fa-lock

@endsection


@section('entity')

Reservations

@endsection

@php($x = 0)
@foreach($reservs as $reserv_item)
<div class="modal fade mt-5" id="check_{{$reserv_item->id_reservation}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <label for="nom" class="h4">Nom du Client [Username]</label>
                            <input type="text" class="form-control" id="nom" value="{{ $reserv_item->nom_client }}" readonly>
                        </div>

                        <div class="col">
                            <label for="mail" class="h4">Addr Mail Client</label>
                            <input type="text" class="form-control" id="mail" value="{{ $reserv_item->mail_client }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="number" class="h4">Numero Tel Client</label>
                            <input type="text" class="form-control" id="number" value="{{ $reserv_item->numero_client }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="product" class="h4">Produit Commandé</label>
                            <input type="text" class="form-control" id="product" value="{{ $vente_produit[$x] }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="date_dest" class="h4">Date de Livraison</label>
                            <input type="text" class="form-control" id="date_dest" value="{{ $reserv_item->date_destination }}" readonly>
                        </div>

                        <div class="col">
                            <label for="date_orig" class="h4">Date de la Commande</label>
                            <input type="text" class="form-control" id="date_orig" value="{{ $reserv_item->date_source }}" readonly>
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
                <h5 class="card-title"> Reservations </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width: 10%;">Date source</th>
                            <th style="width: 10%;">Date destination</th>
                            <th style="width: 30%;">Nom client</th>
                            <th style="width: 10%;">Numéro client</th>
                            <th style="width: 20%;">Email client</th>
                            <th style="width: 20%;">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($reservs as $reserv_item)
                        <tr>
                            <th scope="row">{{ $reserv_item->id_reservation }}</th>
                            <td>{{ $reserv_item->date_source }}</td>
                            <td>{{ $reserv_item->date_destination }}</td>
                            <td>{{ $reserv_item->nom_client }}</td>
                            <td>{{ $reserv_item->numero_client }}</td>
                            <td>{{ $reserv_item->mail_client }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                <div class="col">
                                        <form action="#">
                                            <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$reserv_item->id_reservation}}" value="&#xf06e">
                                        </form>
                                    </div>

                                    <div class="col">
                                    <form action="{{ route('Supprimer une reservation', ['reserv'=>$reserv_item->id_reservation]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="reserv" value="{{ $reserv_item->id_reservation }}" readonly>
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