<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'sitio_web',
    ];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
