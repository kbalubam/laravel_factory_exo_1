<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $dataBat = Batiment::all();


        return view('pages.batiment', compact('dataBat'));
    }
}
