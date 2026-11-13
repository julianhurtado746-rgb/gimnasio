<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';

    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'duracion_mes',
    ];

    public function miembros()
    {
        return $this->hasMany(Miembro::class, 'plan_id');
    }
}