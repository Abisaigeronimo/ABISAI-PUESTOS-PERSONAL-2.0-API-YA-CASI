<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestosPersonal extends Model
{
    use HasFactory;

    protected $table = 'puestos_personal';

    
    protected $primaryKey = 'rfc';

    
    public $incrementing = false;

    
    protected $fillable = [
        'rfc',
        'clave_puesto',
        'horas_asignadas',
        'fecha_ingreso_puesto',
        'fecha_termino_puesto',
        'fecha_de_ratificacion_puesto',
    ];
}