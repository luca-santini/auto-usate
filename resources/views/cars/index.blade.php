@extends('layouts.app')

@section('page-title', 'Lista auto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-3 mb-3">Lista auto</h1>
                      <input id="myInput" type="text" placeholder="Search.." name="search">
                    <a class="btn btn-primary"
                    href="{{ route('cars.create') }}">
                        Nuovo auto
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modello</th>
                            <th>Carburante</th>
                            <th>Porte</th>
                            <th class="text-right">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $car)
                            <tr>
                                <td>{{ $car->marca }}</td>
                                <td>{{ $car->modello }}</td>
                                <td>{{ $car->carburante }}</td>
                                <td>{{ $car->porte }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm"
                                    href="{{ route('cars.show', ['car' => $car->id]) }}">
                                        Dettagli
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('cars.edit', ['car' => $car->id]) }}">Modifica</a>
                                    <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="post">
                                       @method('DELETE')
                                       @csrf
                                       <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                                   </form>
                                </td>
                            </tr>
                        @empty
                            <tr colspan="4">
                                <td>Non è presente nessun auto</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
