<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function generateExercises(Request $request)
    {
        echo 'Gerar exercicios';
    }

    public function printExercises()
    {
        echo 'Imprimir exercícios no navegador';
    }

    public function exportExercises()
    {
        echo 'Exportar exercícios para um arquivo de texto';
    }
}
