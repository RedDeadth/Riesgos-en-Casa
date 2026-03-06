<?php

namespace App\Http\Controllers;

use App\Models\Inspeccion;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'inspector_nombre' => 'nullable|string|max:150',
            'inspector_email' => 'nullable|email|max:255',
            'tipo_vivienda' => 'nullable|string|max:100',
            'plantas' => 'nullable|string|max:10',
            'zona_construccion' => 'nullable|string|max:50',
            'fecha' => 'nullable|string|max:50',
            'pais' => 'nullable|string|max:100',
            'region' => 'nullable|string|max:100',
            'provincia' => 'nullable|string|max:100',
            'grado_estudios' => 'nullable|string|max:100',
            'score_electrico' => 'nullable|integer',
            'score_incendio' => 'nullable|integer',
            'score_caidas' => 'nullable|integer',
            'score_humedad' => 'nullable|integer',
            'score_estructural' => 'nullable|integer',
            'score_salud' => 'nullable|integer',
            'score_infantil' => 'nullable|integer',
            'score_total' => 'nullable|integer',
            'nivel_riesgo' => 'nullable|string|max:50',
            'respuestas_json' => 'nullable|array',
        ]);

        Inspeccion::create($validated);

        return redirect()->route('survey.index')->with('success', 'Evaluación guardada exitosamente.');
    }
}
