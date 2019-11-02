<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index() {
        return view('avaliacaoFisica.show');
    }

    public function novaAvaliacao() {
        return view('avaliacaoFisica.criar');
    }
}
