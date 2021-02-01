@extends('layouts.app')

@section('title', 'Passengers')

@section('content')

  <h1>Vuelo</h1>

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">lastname</th>
            <th scope="col">nif</th>
            <th scope="col">date of birth</th>
            <th scope="col">gender</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $user)
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->nif}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>{{$user->gender}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>



@endsection
