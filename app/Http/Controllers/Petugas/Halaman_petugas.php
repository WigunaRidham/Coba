<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Halaman_petugas extends Controller
{
    public function petugas()
    {
    	return view ('petugas_pendataan/index');
    }
}
