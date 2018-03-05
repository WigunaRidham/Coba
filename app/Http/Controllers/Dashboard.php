<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Dashboard extends Controller
{
    public function Petunjuk()
    {
        return view('dashboard.petunjuk');
    }
    
    public function Tentang()
    {
        return view('dashboard.tentang');
    }
}
