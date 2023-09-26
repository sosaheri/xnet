<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    const DEPT_ATC = 1;
    const DEPT_RRHH = 2;
    const DEPT_COMERCIAL = 3;
    const DEPT_LIMPIEZA = 4;
    const DEPT_PLANTA_RECICLAJE = 5;

    protected $fillable = ['name'];
}
