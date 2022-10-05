<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $nome = 'José';
        $idade = 48;
        return view('home', ['nome' => $nome], ['idade' => $idade]);
    }
}
