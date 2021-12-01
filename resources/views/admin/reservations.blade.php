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

<div class="row">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title"> Reservations </h5>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date source</th>
                            <th>Date destination</th>
                            <th>Nom client</th>
                            <th>Numéro client</th>
                            <th>Email client</th>
                            <th>Actions</th>

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
                                <div class="grid grid-cols-3 place-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
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