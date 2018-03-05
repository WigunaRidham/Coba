<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Halaman_kecamatan extends Controller
{
    public function kecamatan ()
    {
    	return view ('kecamatan/index');
    }
}
