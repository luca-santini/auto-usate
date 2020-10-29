@extends('layouts.app')

@section('page-title', 'Creazione auto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Creazione nuovo auto</h1>
                <form action="{{ route('cars.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" class="form-control" id="marca" placeholder="Marca auto">
                    </div>
                    <div class="form-group">
                        <label for="modello">Modello</label>
                        <input type="text" name="modello" class="form-control" id="modello" placeholder="Modello auto">
                    </div>
                    <div class="form-group">
                        <label for="carburante">Carburante</label>
                        <select name="carburante" class="custom-select" id="carburante">
                            <option selected>Seleziona</option>
                            <option id="carburante" value="benzina">Benzina</option>
                            <option id="carburante" value="diesel">Diesel</option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="porte">Porte</label>
                        <select name="porte" class="custom-select" id="porte">
                            <option selected>Seleziona</option>
                            <option id="porte" value="3">3</option>
                            <option id="porte" value="5">5</option>
                         </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
