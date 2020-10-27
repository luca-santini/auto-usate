@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Marca</th>
                  <th scope="col">Modello</th>
                  <th scope="col">Carburante</th>
                  <th scope="col">Porte</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $marca }}</th>
                  <td>{{ $modello }}</td>
                  <td>{{ $carburante }}</td>
                  <td>{{ $porte }}</td>
                </tr>
                <tr>
                  <th scope="row">{{ $marca }}</th>
                  <td>{{ $modello }}</td>
                  <td>{{ $carburante }}</td>
                  <td>{{ $porte }}</td>
                </tr>
                <tr>
                  <th scope="row">{{ $marca }}</th>
                  <td>{{ $modello }}</td>
                  <td>{{ $carburante }}</td>
                  <td>{{ $porte }}</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
