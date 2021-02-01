@extends('layouts.app')

@section('title', 'Passengers')

@section('content')

  <h1>Informacion de pasajeros en el vuelo</h1>

       <h2>Seleccionar vuelo:</h2>
    
       <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('messages.flight_passengers')
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($vuelos as $vuelo)
                    <a class="dropdown-item" href="{{route('mostrar', '$vuelo')}}">{{$vuelo->name}}</a>
                @endforeach
            </div>
        </div>


@endsection
