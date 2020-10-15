@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-md-8">
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Marca</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Modello</label>
                          <input type="text" class="form-control" >
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Carburante</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Porte</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
