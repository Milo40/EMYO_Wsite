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

@foreach($msgs as $msg_item)
<div class="modal fade mt-5" id="check_{{$msg_item->id_message}}" role="dialog" aria-labelledby="Modal" aria-hidden="true">
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
                            <label for="subject" class="h4">Sujet</label>
                            <input type="text" class="form-control" id="sujet" value="{{ $msg_item->sujet }}" readonly>
                        </div>
                        <div class="col">
                            <label for="mail" class="h4">Addr Mail</label>
                            <input type="text" class="form-control" id="mail" value="{{ $msg_item->email }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2">
                        <div class="col">
                            <label for="number" class="h4">Numero Tel</label>
                            <input type="text" class="form-control" id="number" value="{{ $msg_item->numero }}" readonly>
                        </div>
                    </div>

                    <div class="row w-100 mt-2 mb-1">
                    <div class="col">
                            <label for="content" class="h4">Corps du message</label><br>
                            <textarea id="content" class="w-100 h-auto form-control" readonly>{{ $msg_item->contenu }}</textarea>
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
                <h5 class="card-title"> Messages </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  30%">Email expediteur</th>
                            <th style="width:  20%">Numéro </th>
                            <th style="width:  30%">Sujet</th>
                            <th style="width:  20%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($msgs as $msg_item)
                        <tr>
                            <th scope="row">{{ $msg_item->id_message }}</th>
                            <td>{{ $msg_item->email }}</td>
                            <td>{{ $msg_item->numero }}</td>
                            <td>{{ $msg_item->sujet }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                <div class="col">
                                        <form action="#">
                                            <input type="button" class="btn btn-sm btn-info m-1" style="width: 100%;" ref="#" data-toggle="modal" data-target="#check_{{$msg_item->id_message}}" value="&#xf06e">
                                        </form>
                                    </div>

                                    <div class="col">
                                    <form action="{{ route('Supprimer un message', ['msg'=>$msg_item->id_message]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="msg" value="{{ $msg_item->id_message }}" readonly>
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