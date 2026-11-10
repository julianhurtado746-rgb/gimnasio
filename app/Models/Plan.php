<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['nombre', 'precio', 'descripcion', 'duracion_mes'];

    public function clientes()
    {
        return $this->hasMany(Miembro::class, 'plan_id');
    }
}