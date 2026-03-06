<?php

namespace App\Http\Controllers;

use App\Models\Inspeccion;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $inspecciones = Inspeccion::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('inspecciones'));
    }
}
