@extends('layouts.app')

@section('title', 'Passengers')

@section('content')

  <h1>Futures Flights</h1>

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Origin</th>
            <th scope="col">Destiny</th>
            <th scope="col">numero de tickets</th>
            <th scope="col">reservar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vuelos as $vuelo)
            <tr>
            <th scope="row">{{$vuelo->name}}</th>
            <td>{{$vuelo->date}}</td>
            <td>{{$vuelo->origin}}</td>
            <td>{{$vuelo->destiny}}</td>
            <form method="POST" action="{{route('sumar')}}">
                @csrf
                <td>
                    <input type="number" name="tickets">
                    <input style="display: none;" type="text" name="vuelo_id" value="{{$vuelo->id}}">
                </td>
                <td>
                    <button class="btn-primary">reservar</button>
                </td>
            </form>
            
            </tr>
        @endforeach
        </tbody>
        </table>



@endsection
