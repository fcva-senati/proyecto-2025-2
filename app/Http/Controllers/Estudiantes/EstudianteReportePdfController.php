<?php

namespace App\Http\Controllers\Estudiantes;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class EstudianteReportePdfController extends Controller
{
    public function index(Request $request) {

        $estudiantes = Estudiante::get();

        $pdf = Pdf::loadView('estudiantes.pdf.index', compact('estudiantes'));

        return $pdf->download('invoice.pdf');
    }
}
