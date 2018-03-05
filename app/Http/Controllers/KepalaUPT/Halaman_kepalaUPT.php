<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Halaman_KepalaUPT extends Controller
{
    public function kepalaUPT ()
    {
    	return view ('kepala_UPT/index');
    }
}
