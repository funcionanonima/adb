<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companie;
use App\Area;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {                       
            return view('home');
    }

    public function serviceCompanie(){
        $comps = Companie::where('user_id', auth()->user()->id)->get(); 
        return $comps;
    }

    public function serviceArea($id){
        $areas = Companie::where('id', $id)->first()->areas;
        return $areas;        
    }

    public function serviceFiles($id){
        $fils = Area::where('id', $id)->first()->documents;
        return $fils;
    }
}
