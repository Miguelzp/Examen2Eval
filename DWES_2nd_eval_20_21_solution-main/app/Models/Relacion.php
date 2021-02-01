<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Creamos la relacion polimorfica entre los vuelos y los usuarios.
    public function fligths()
    {
        return $this->morphedByMany(Flight::class, 'relacionable');
    }

    public function users()
    {
        return $this->morphedByMany(User::class, 'relacionable');
    }
}
