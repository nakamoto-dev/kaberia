<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Ninja\DocxToTextConversion;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.upload');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       


        $fileName = time().'.'.$request->file->extension();  

   

        $request->file->move(public_path('uploads'), $fileName);



        $converter = new DocxToTextConversion($fileName);

        $cont = $converter->convertToText();


        Document::create(['content' => $cont, 'writer'=>$request->writer]);


        return back()

            ->with('success','You have successfully upload file.')

            ->with('file',$fileName);
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
