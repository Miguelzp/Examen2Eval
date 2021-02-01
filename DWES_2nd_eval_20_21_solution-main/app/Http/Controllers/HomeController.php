<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Flight;
use App\Models\Relacion;
use App\Models\Flight as ModelsFlight;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function vuelo(Request $request)
    {
        //en la siguiente variable se almacenan todos los registros de los vuelos
        $vuelo = Flight::find($request->id);
        //utilizamos compact para que la vista pueda acceder a los registros del vuelo en concreto
        return view('info')->with('vuelo', $vuelo);
    }
    
    public function buscar()
    {
        $vuelos = Flight::all();
        return view('buscar', ['vuelos' => $vuelos]);
    }

    public function futuros()
    {
        //Intento ponerle la condicion de order by pero me salta un error de que el metodo no existe, y que tal vez deberia usar sortBy pero no me funciona tampoco.
        //$vuelos = Flight::all()->orderBy('date', 'asc');
       $vuelos = Flight::all();
        return view('futuros', ['vuelos' => $vuelos]);
    }

    public function admin()
    {
        $this->middleware('Laboral');
        $usuarios = User::all()->where('rol', 'usuario');
        return view('admin', ['usuarios' => $usuarios]);
    }

    public function sumar(Request $request)
    {
        $relacion = new Relacion();
        $relacion->tickets = $request->tickets;
        $relacion->vuelo_id = $request->vuelo_id;

        Relacion::create([
            'user_id' => auth()->user()->id,
            'tickets' => $relacion->tickets,
            'vuelo_id' => $relacion->vuelo_id,
        ]);
    }
}
