<?php

namespace App\Http\Controllers;

use App\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Companie::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comp = new Companie();
        $comp->user_id = $request->user_id;
        $comp->body = $request->body;
        $comp->name = $request->name;     
        $comp->save();

        return $comp;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(Companie $companie)
    {
        return $companie;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit(Companie $companie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companie $companie)
    {
        $companie->user_id = $request->user_id;
        $companie->name = $request->name;
        $companie->body = $request->body;
        $companie->save();

        return $companie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companie $companie)
    {
        $companie->delete();
        return $companie;
    }

    public function indexCompanie(){
        return view('companies.index');
    }
}
