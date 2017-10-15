<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
class MainController extends Controller
{
    public function home()
    {
        $productos = Producto::simplePaginate(4);

        return view('main.home', ['productos' => $productos]);
    }
}
