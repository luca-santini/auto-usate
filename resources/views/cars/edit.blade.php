@extends('layouts.app')

@section('page-title', 'Modifica auto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Modifica auto</h1>
                @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
                @endif

                <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nome">Marca</label>
                        <input type="text" name="name" class="form-control" id="marca" placeholder="Nome auto" value="{{ old('marca', $car->marca) }}">
                        @error ('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="descrizione">Modello</label>
                        <input type="text" name="description" class="form-control" id="modello" placeholder="Modello">{{ old('description', $car->modello) }}>
                        @error ('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Carburante</label>
                        <input name="price" class="form-control" id="prezzo" placeholder="Carburante" value="{{ old('carburante', $car->carburante) }}">
                        @error ('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="porte">Porte</label>
                        <input name="price" class="form-control" id="prezzo" placeholder="Porte" value="{{ old('carburante', $car->porte) }}">
                        @error ('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
