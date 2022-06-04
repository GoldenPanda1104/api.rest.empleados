<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
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

    protected $allowFilter = ['email'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
