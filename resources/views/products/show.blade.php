@extends('layouts.app')

@section('page-title', 'Dettaglio prodotto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Dettaglio prodotto</h1>
                <ul>
                    <li>ID: {{ $prodotto->id }}</li>
                    <li>Nome: {{ $prodotto->name }}</li>
                    <li>Descrizione: {{ $prodotto->description }}</li>
                    <li>Prezzo: {{ $prodotto->price }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
