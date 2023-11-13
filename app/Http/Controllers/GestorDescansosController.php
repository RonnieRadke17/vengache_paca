<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestorDescansosController extends Controller
{
    public function index()
    {
        return view('gestorDescansos.descansos');
    }
}
