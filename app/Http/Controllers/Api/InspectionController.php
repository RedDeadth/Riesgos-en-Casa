<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inspeccion;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inspections = Inspeccion::orderBy('created_at', 'desc')->get();

        $stats = [
            'total' => $inspections->count(),
            'bajo' => $inspections->where('nivel_riesgo', 'Bajo')->count(),
            'moderado' => $inspections->where('nivel_riesgo', 'Moderado')->count(),
            'alto' => $inspections->where('nivel_riesgo', 'Alto')->count(),
            'critico' => $inspections->where('nivel_riesgo', 'Crítico')->count(),
            'avgScore' => $inspections->count() > 0 ? round($inspections->avg('score_total')) : 0,
        ];

        return response()->json([
            'stats' => $stats,
            'inspecciones' => $inspections
        ]);
    }
}
