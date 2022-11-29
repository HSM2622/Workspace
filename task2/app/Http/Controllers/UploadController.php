<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view("barcode");
    }
     
    public function upload(Request $request){
        $file = $request->uploadFile->store('images');
        return redirect('/barcode');
    }
}

