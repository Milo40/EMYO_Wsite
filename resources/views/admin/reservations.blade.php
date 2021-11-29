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
                <div class="card-body"><h5 class="card-title"> Reservations </h5>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
