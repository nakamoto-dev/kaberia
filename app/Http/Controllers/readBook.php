<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class readBook extends Controller
{
   public function index(){
    $data = Document::first();
    return view('book.read')->with('data', $data);
   }
}
