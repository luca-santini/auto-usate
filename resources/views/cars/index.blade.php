@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Marca</th>
                      <th scope="col">Modello</th>
                      <th scope="col">Carburante</th>
                      <th scope="col">Porte</th>
                    </tr>
                  </thead>
                  <tbody>@forelse ($cars as $car)
                      <td>{{ $car->marca }}</td>
                      <td>{{ $car->modello }}</td>
                      <td>{{ $car->carburante }}</td>
                      <td>{{ $car->porte }}</td>
                  @empty

                  @endforelse
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
