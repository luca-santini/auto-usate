@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Vendi la tua auto</h1>
            <h3>Seleziona la marca</h3>
            <select class="custom-select custom-select-lg mb-3">
              <option selected>-- Seleziona la marca --</option>
              <option value="1">Audi</option>
              <option value="2">Fiat</option>
              <option value="3">Mercedes</option>
              <option value="4">BMW</option>
              <option value="5">Renault</option>
            </select>
            <h3>Data Immatricozione</h3>
            <select class="custom-select custom-select-lg mb-3">
              <option selected>-- Mese --</option>
              <option value="1">01</option>
              <option value="2">02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
              <option value="6">06</option>
              <option value="7">07</option>
              <option value="8">08</option>
              <option value="9">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select class="custom-select custom-select-lg mb-3">
              <option selected>-- Anno --</option>
              <option value="1">2020</option>
              <option value="2">2019</option>
              <option value="3">2018</option>
              <option value="4">2017</option>
              <option value="5">2016</option>
              <option value="6">2015</option>
              <option value="7">2014</option>
              <option value="8">2013</option>
              <option value="9">2012</option>
              <option value="10">2011</option>
              <option value="11">2010</option>
              <option value="12">2009</option>
              <option value="13">2008</option>
              <option value="14">2007</option>
              <option value="15">2006</option>
              <option value="16">2005</option>
              <option value="17">2004</option>
              <option value="18">2003</option>
              <option value="19">2002</option>
              <option value="20">2001</option>
              <option value="21">2000</option>
            </select>
            <h3>Modello</h3>
            <select class="custom-select custom-select-lg mb-3">
              <option selected>-- Seleziona il modello --</option>
              <option value="1">A3</option>
              <option value="2">A4</option>
              <option value="3">A6</option>
              <option value="4">A8</option>
              <option value="5">Punto</option>
              <option value="6">500</option>
              <option value="7">Panda</option>
              <option value="8">Bravo</option>
              <option value="9">Classe A</option>
              <option value="10">Classe C</option>
              <option value="11">Classe E</option>
              <option value="12">Classe S</option>
              <option value="13">Serie 1</option>
              <option value="14">Serie 3</option>
              <option value="15">Serie 5</option>
              <option value="16">Serie 7</option>
              <option value="17">Clio</option>
              <option value="18">Megane</option>
              <option value="19">Captur</option>
              <option value="20">Espace</option>
            </select>
            <h3>Carburante</h3>
            <select class="custom-select custom-select-lg mb-3">
              <option selected>-- Carburante --</option>
              <option value="1">Benzina</option>
              <option value="2">Diesel</option>
            </select>
            <h3>Porte</h3>
            <select class="custom-select custom-select-lg mb-3">
              <option selected>-- Porte --</option>
              <option value="1">3</option>
              <option value="2">5</option>
            </select>
        </div>
    </div>
</div>
@endsection
