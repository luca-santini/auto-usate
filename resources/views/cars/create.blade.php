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
                        <input type="text" name="name" class="form-control" id="marca" placeholder="Marca auto">
                    </div>
                    <div class="form-group">
                        <label for="modello">Modello</label>
                        <input type="text" name="description" class="form-control" id="modello" placeholder="Modello auto">
                    </div>
                    <div class="form-group">
                        <label for="modello">Carburante</label>
                        <select class="custom-select" id="carburante">
                            <option selected>Seleziona</option>
                            <option value="1">Benzina</option>
                            <option value="2">Diesel</option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="modello">Porte</label>
                        <select class="custom-select" id="porte">
                            <option selected>Seleziona</option>
                            <option value="1">3</option>
                            <option value="2">5</option>
                         </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
