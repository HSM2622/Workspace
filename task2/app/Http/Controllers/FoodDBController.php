<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Db_food;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class FoodDBController extends Controller
{
    public function index(){
        $result = 0;
        return view('barcode')->with('result',$result);
    }
    public function select(){
        $req = $_GET['id'];

        $result = DB::table('db_food')->where('SAMPLE_ID', $req)->get();
        return view('barcode',['result'=>$result]);
    }
    public function save(){
        $req = $_GET['content'];
        History::Create([
            'created_at' => now(),
            'user_id' => Auth::user()->id,
            'food' => $req
        ]);
        return view('barcode',['result'=>0])->with('alert', 'db 저장됨');
    }
}
