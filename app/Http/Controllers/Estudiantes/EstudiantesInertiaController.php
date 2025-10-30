<?php

namespace App\Http\Controllers\Estudiantes;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EstudiantesInertiaController extends Controller
{
    public function index(Request $request) {

        $estudiantes = Estudiante::orderBy('id', 'DESC')->get();

        return Inertia::render('Estudiante/Index', [
            'estudiantes' => $estudiantes
        ]);
    }
}
