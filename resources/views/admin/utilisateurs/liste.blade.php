@extends('layouts.admin.admin')

@section('title')

Liste d'utilisateurs

@endsection

@section('icon')

fas fa-filter

@endsection

@section('entity')

Liste d'utilisateurs

@endsection

@foreach($users as $user_item)
<div class="modal fade mt-5" id="check_{{$user_item->id_utilisateur}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <input type="text" class="form-control" id="nom" value="{{ $user_item->nom }}" readonly>
                        </div>

                        <div class="col">
                            <label for="username" class="h4">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="username" value="{{ $user_item->uname }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="mail" class="h4">Mail</label>
                            <input type="text" class="form-control" id="mail" value="{{ $user_item->mail }}" readonly>
                        </div>

                        <div class="col">
                            <label for="urole" class="h4">Role</label>
                            <input type="text" class="form-control" id="urole" value="{{ $user_item->role }}" readonly>
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
                <h5 class="card-title"> Liste d'utilisateurs </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  20%">Email</th>
                            <th style="width:  20%">Nom</th>
                            <th style="width:  20%">Pseudo </th>
                            <th style="width:  20%">Role</th>
                            <th style="width:  11%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($users as $user_item)
                        <tr>
                            <th scope="row">{{ $user_item->id_utilisateur }}</th>
                            <td>{{ $user_item->nom }}</td>
                            <td>{{ $user_item->mail }}</td>
                            <td>{{ $user_item->uname }}</td>
                            <td>{{ $user_item->role }}</td>
                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center align-items-center no-gutters d-flex">
                                    <div class="col-4">
                                            <form action="#">
                                                <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$user_item->id_utilisateur}}" value="&#xf06e">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                        <form action="{{ route('Modifier un utilisateur', ['user'=>$user_item->id_utilisateur]) }}" method="GET">
                                            @csrf
                                            <input type="hidden" name="user" value="{{ $user_item->id_utilisateur }}" readonly>
                                            <input type="submit" class="btn btn-warning m-1" style="width: 100%;" value="&#xf044">
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Supprimer un utilisateur', ['user'=>$user_item->id_utilisateur]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="user" value="{{ $user_item->id_utilisateur }}" readonly>
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