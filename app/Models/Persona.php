<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    /* protected $fillable =c
    [
        'cedula',
        'nombre',
        'apellido',
        'fijo',
        'celular',
        'direccion',
        'municipio',
        'barrio',
        'fechanac',
        'estcivil',
        'email'
    ]; */

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
