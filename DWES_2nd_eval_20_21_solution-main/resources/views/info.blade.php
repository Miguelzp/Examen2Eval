@extends('layouts.app')

@section('title', 'Passengers')

@section('content')

  <h1>Buscar vuelos</h1>

  <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Pasajero</th>
            <th scope="col">Numero de villetes</th>
            <th scope="col">Precio del ticket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">{{$vuelo->name}}</th>
            <td>{{$vuelo->date}}</td>
            <td>{{$vuelo->origin}}</td>
            <td>{{$vuelo->destiny}}</td>
            <td><a href="{{route('mostrarDatos', '$vuelo')}}"> Ver actividad del vuelo</a></td>
            </tr>
        </tbody>
        </table>



@endsection
