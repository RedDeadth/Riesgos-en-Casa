<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    protected $fillable = [
        'inspector_nombre',
        'inspector_email',
        'tipo_vivienda',
        'plantas',
        'zona_construccion',
        'fecha',
        'pais',
        'region',
        'provincia',
        'grado_estudios',
        'score_electrico',
        'score_incendio',
        'score_caidas',
        'score_humedad',
        'score_estructural',
        'score_salud',
        'score_infantil',
        'score_total',
        'nivel_riesgo',
        'respuestas_json',
    ];

    protected $casts = [
        'respuestas_json' => 'array',
    ];
}
