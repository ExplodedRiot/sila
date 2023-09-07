<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryFKMController extends Controller
{
    public function index()
    {
        return view('klasterisasifkm/historyfkm');
    }
}
