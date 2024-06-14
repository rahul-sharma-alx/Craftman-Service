<?php

namespace App\Http\Controllers;

use App\Models\Craftman;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        $Craftman = Craftman::all();
        //dd($Craftman);
        return view('welcome',compact('Craftman'));
    }
}
