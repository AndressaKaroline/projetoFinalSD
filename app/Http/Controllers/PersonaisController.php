<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaisController extends Controller
{
    public function index() {
        return view('personais.show');
    }

    public function cadastrar() {
        return view('personais.criar');
    }
}
