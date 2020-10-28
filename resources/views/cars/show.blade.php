@extends('layouts.app')

@section('page-title', 'Dettaglio prodotto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Dettaglio auto</h1>
                <ul>
                    <li>Marca: {{ $car->marca }}</li>
                    <li>Modello: {{ $car->modello }}</li>
                    <li>Carburante: {{ $car->carburante }}</li>
                    <li>Porte: {{ $car->porte }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
