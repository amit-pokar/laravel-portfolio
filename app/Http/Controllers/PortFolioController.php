<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    public function index()
    {
        return view('portfolio');
    }
}
