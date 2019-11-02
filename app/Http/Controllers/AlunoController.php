<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        return view('alunos/show');
    }

    public function cadastrar() {
        return view('alunos/criar');
    }
}
