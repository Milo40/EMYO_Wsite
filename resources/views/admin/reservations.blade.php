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
                            <th style="width: 30%;">Email client</th>
                            <th style="width: 10%;">Actions</th>

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
                                <form action="{{ Request::url() }}" method="GET">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="reserv" value="{{ $reserv_item->id_reserv }}" readonly>
                                        <button type="submit" class="btn btn-sm btn-info m-1" style="width: 60%;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>

                                    <form action="{{ route('Supprimer une reservation', ['reserv'=>$reserv_item->id_reservation]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="reserv" value="{{ $reserv_item->id_reservation }}" readonly>
                                        <button type="submit" class="btn btn-danger m-1" style="width: 60%;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
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