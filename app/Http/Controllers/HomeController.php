<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomeController extends Controller
{
    public function index(){

        $trains = Train::all();
        return view('homepage', compact('trains'));
    }
}
