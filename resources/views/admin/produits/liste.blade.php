@extends('layouts.admin.admin')

@section('title')

Liste de produits

@endsection

@section('icon')

fas fa-tshirt

@endsection

@section('entity')

Liste de produits

@endsection

@section('content')

@include('status_messages')

<div class="row">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title"> Liste de produits </h5>
                <table class="mb-0 table table-striped table-fixed">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th style="width:  20%">Nom</th>
                            <th style="width:  30%">Description</th>
                            <th style="width:  10%">Image</th>
                            <th style="width:  11%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($prods as $prod_item)
                        <tr>
                            <th scope="row">{{ $prod_item->id_produit }}</th>
                            <td>{{ $prod_item->nom }}</td>
                            <td>{{ $prod_item->description }}</td>
                            <td>{{ $prod_item->image }}</td>
                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center align-items-center no-gutters d-flex">
                                        <div class="col-4">
                                            <form action="{{ Request::url() }}" method="GET">
                                                @csrf
                                                <button class="btn btn-sm btn-info m-1" style="width: 100%;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>

                                        <div class="col-4">
                                        <form action="{{ route('Modifier un produit', ['prod'=>$prod_item->id_produit]) }}" method="GET">
                                            @csrf
                                            <input type="hidden" name="prod" value="{{ $prod_item->id_produit }}" readonly>
                                                <button type="submit" class="btn btn-warning m-1" style="width: 100%;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>

                                        <div class="col-4">
                                            <form action="{{ route('Supprimer un produit', ['prod'=>$prod_item->id_produit]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="prod" value="{{ $prod_item->id_produit }}" readonly>
                                                <button type="submit" class="btn btn-danger m-1" style="width: 100%;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
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