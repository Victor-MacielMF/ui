<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Alter extends Controller
{

    public function index()
    {
        return view('usuario.view');
    }
}
