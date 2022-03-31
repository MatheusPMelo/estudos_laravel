<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home()
    {
        return view('clientes.index');
    }

    public function departamentos()
    {
        return view('pages.departamentos');
    }

    public function produtos()
    {
        return view('pages.produtos');
    }
}
