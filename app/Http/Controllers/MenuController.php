<?php
// app/Http/Controllers/MenuController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
    public function mostrarMenu()
    {
        $productos = Product::all();

        return view('menu.menu', ['productos' => $productos]);
    }
}
