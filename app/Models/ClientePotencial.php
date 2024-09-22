<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientePotencial extends Model
{
    public $table = 'clientes_potenciales';

    public $fillable = [
        'nombre',
        'email',
        'telefono',
        'negociacion'
    ];

    protected $casts = [
        'nombre' => 'string',
        'email' => 'string',
        'telefono' => 'string',
        'negociacion' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'telefono' => 'nullable|string|max:255',
        'negociacion' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
