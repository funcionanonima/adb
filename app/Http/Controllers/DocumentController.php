<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Document::all();
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
        // tomo el archivo para almacenarlo
        if($request->hasFile('file')){
            $file = $request->file('file');
            // nombre apra no repetir
            $nameFile = time().$file->getClientOriginalName();
            // moverlo a alguna carpeta (public_path = public)
            $file->move(public_path().'/files/', $nameFile); 
            // return $nameFile;           
        }

        $document = new Document();
        $document->name = $request->name;
        $document->area_id = $request->area_id;
        $document->route = $nameFile;
        $document->save();

        return $document;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return $document;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        // tomo el archivo para almacenarlo
        if($request->hasFile('file')){
            $file = $request->file('file');
            // nombre apra no repetir
            $nameFile = time().$file->getClientOriginalName();
            // moverlo a alguna carpeta (public_path = public)
            $file->move(public_path().'/files/', $nameFile); 
            // return $nameFile;           
        }

        $document->name = $request->name;
        $document->area_id = $request->area_id;
        $document->route = $nameFile;
        $document->save();

        return $document;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return $document;
    }

    public function indexDocument(){
        return view('documents.index');
    }
}
