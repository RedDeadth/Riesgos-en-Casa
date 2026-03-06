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
        try {
            // Validación dinámica según el país
            $rules = [
                'inspector_nombre' => 'nullable|string|max:150',
                'inspector_email' => 'nullable|email|max:255',
                'tipo_vivienda' => 'nullable|string|max:100',
                'plantas' => 'nullable|string|max:10',
                'zona_construccion' => 'nullable|string|max:50',
                'fecha' => 'nullable|string|max:50',
                'pais' => 'required|string|max:100',
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
                'respuestas_json' => 'nullable|string',
            ];

            // Si el país es Perú, región y provincia son obligatorios
            $pais = strtolower(trim($request->input('pais', '')));
            if ($pais === 'perú' || $pais === 'peru') {
                $rules['region'] = 'required|string|max:100';
                $rules['provincia'] = 'required|string|max:100';
            } else {
                $rules['region'] = 'nullable|string|max:100';
                $rules['provincia'] = 'nullable|string|max:100';
            }

            $validated = $request->validate($rules);

            // Convertir respuestas_json de string a array si es necesario
            if (isset($validated['respuestas_json']) && is_string($validated['respuestas_json'])) {
                $validated['respuestas_json'] = json_decode($validated['respuestas_json'], true);
            }

            Inspeccion::create($validated);

            return redirect()->route('survey.gracias')->with('success', 'Evaluación guardada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al guardar: ' . $e->getMessage());
        }
    }
}
