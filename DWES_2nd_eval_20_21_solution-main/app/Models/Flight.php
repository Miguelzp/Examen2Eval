<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function relacion()
    {
        return $this->morphToMany(Relacion::class, 'relacionable');
    }
}
