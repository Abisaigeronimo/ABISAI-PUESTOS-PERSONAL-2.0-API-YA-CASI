<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestosPersonal extends Model
{
    use HasFactory;

    protected $table = 'puestos_personal';

    // Especificar la clave primaria
    protected $primaryKey = 'rfc';

    // Indicar que la clave primaria no es un número autoincrementable
    public $incrementing = false;

    // Definir los campos que son asignables en masa
    protected $fillable = [
        'rfc',
        'clave_puesto',
        'horas_asignadas',
        'fecha_ingreso_puesto',
        'fecha_termino_puesto',
        'fecha_de_ratificacion_puesto',
    ];
}