<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home()
    {
        return view('clientes.index');
    }
}
