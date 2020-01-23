<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class HomeController extends Controller
{
    public function index()
    {
        $numeros["produtos"] = Produtos::count();
        return view('home', compact("numeros"));
    }
}
