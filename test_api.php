<?php

// Script de prueba para verificar la API de inspecciones

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Inspeccion;

echo "=== PRUEBA DE API DE INSPECCIONES ===\n\n";

// Obtener todas las inspecciones
$inspections = Inspeccion::orderBy('created_at', 'desc')->get();

echo "Total de inspecciones: " . $inspections->count() . "\n\n";

if ($inspections->count() > 0) {
    echo "Primeras 3 inspecciones:\n";
    foreach ($inspections->take(3) as $insp) {
        echo "  - ID: {$insp->id}\n";
        echo "    Inspector: {$insp->inspector_nombre}\n";
        echo "    Nivel: {$insp->nivel_riesgo}\n";
        echo "    Score: {$insp->score_total}\n";
        echo "    Fecha: {$insp->created_at}\n\n";
    }
}

// Calcular estadísticas
$stats = [
    'total' => $inspections->count(),
    'bajo' => $inspections->where('nivel_riesgo', 'Bajo')->count(),
    'moderado' => $inspections->where('nivel_riesgo', 'Moderado')->count(),
    'alto' => $inspections->where('nivel_riesgo', 'Alto')->count(),
    'critico' => $inspections->where('nivel_riesgo', 'Crítico')->count(),
    'avgScore' => $inspections->count() > 0 ? round($inspections->avg('score_total')) : 0,
];

echo "Estadísticas:\n";
echo json_encode($stats, JSON_PRETTY_PRINT) . "\n\n";

echo "JSON completo (como lo devuelve la API):\n";
$response = [
    'stats' => $stats,
    'inspecciones' => $inspections->toArray()
];
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n";
