@extends('layouts.admin.admin')

@section('title')

    Messages

@endsection

@section('icon')

    fas fa-mail-bulk

@endsection


@section('entity')

    Messages

@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title"> Messages </h5>
                    <table class="mb-0 table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Email expediteur</th>
                            <th>Numéro </th>
                            <th>Sujet</th>
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
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Mark</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

@endsection
