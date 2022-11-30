<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Db_food;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Validator;

class FoodDBController extends Controller
{   
    public function index(){
        $result = 0;
        // $api = Http::get("http://openapi.foodsafetykorea.go.kr/api/fc67310cce3340bf8ed3/C005/json/1/1/");
        // $api = Http::get("http://apis.data.go.kr/1471000/FoodNtrIrdntInfoService1/getFoodNtrItdntList1?serviceKey={$servicekey}&desc_kor=표고버섯볶음&type=xml");
        // $xml = simplexml_load_string($api);
        // $json = json_encode($xml); 
        // $array = json_decode($json,TRUE);
        // dd($array);
        
        return view('barcode')->with('result',$result);
    }
    
    public function select(Request $request){
        $user = auth()->user();
        if ($user != null)
        $permission = true;
        else        
        $permission = false;
        // $req = $_GET['barcode_id'];
        // $req = Request['barcode_id'];
        $req = $request->barcode_id;
        // dd($req);
        if ($req != null){
            $servicekey = "N5xNCkHI4O1qM5WT1qZcAvUqnSGodMwYDxsWJtwjxBpqQOt9A2GCN6cwsVGv2cx77HsPp5zyh45qtDyqRgOdiw%3D%3D";
            $api = Http::get("http://openapi.foodsafetykorea.go.kr/api/fc67310cce3340bf8ed3/C005/xml/1/1/BAR_CD=${req}");
            $xml = simplexml_load_string($api);
            $json = json_encode($xml); 
            $array = json_decode($json,TRUE);
            if ($array['RESULT']["MSG"] != "해당하는 데이터가 없습니다."){
                $result = $array['row']['PRDLST_NM'];
                $api2 = Http::get("http://apis.data.go.kr/1471000/FoodNtrIrdntInfoService1/getFoodNtrItdntList1?serviceKey=${servicekey}&desc_kor=${result}&type=xml");
                $xml2 = simplexml_load_string($api2);
                $json2 = json_encode($xml2); 
                $array2 = json_decode($json2,TRUE);
                $result2 = $array2['body']['items']['item'][0];
            } else
            $result2 = 0;
        } else
        $result2 = 0;
        
        return view('barcode',['result'=>$result2, 'permission' => $permission]);
    }
    public function save(Request $request){
        $DESC_KOR = $request->DESC_KOR;
        $ANIMAL_PLANT = $request->ANIMAL_PLANT;
        $SERVING_WT = $request->SERVING_WT;
        $NUTR_CONT1 = $request->NUTR_CONT1;
        $NUTR_CONT2 = $request->NUTR_CONT2;
        $NUTR_CONT3 = $request->NUTR_CONT3;
        $NUTR_CONT4 = $request->NUTR_CONT4;
        $NUTR_CONT5 = $request->NUTR_CONT5;
        $NUTR_CONT6 = $request->NUTR_CONT6;
        $NUTR_CONT7 = $request->NUTR_CONT7;
        $NUTR_CONT8 = $request->NUTR_CONT8;
        $NUTR_CONT9 = $request->NUTR_CONT9;
        // $DESC_KOR = $_GET['DESC_KOR'];
        // $ANIMAL_PLANT = $_GET['ANIMAL_PLANT'];
        // $SERVING_WT = $_GET['SERVING_WT'];
        // $NUTR_CONT1 = $_GET['NUTR_CONT1'];
        // $NUTR_CONT2 = $_GET['NUTR_CONT2'];
        // $NUTR_CONT3 = $_GET['NUTR_CONT3'];
        // $NUTR_CONT4 = $_GET['NUTR_CONT4'];
        // $NUTR_CONT5 = $_GET['NUTR_CONT5'];
        // $NUTR_CONT6 = $_GET['NUTR_CONT6'];
        // $NUTR_CONT7 = $_GET['NUTR_CONT7'];
        // $NUTR_CONT8 = $_GET['NUTR_CONT8'];
        // $NUTR_CONT9 = $_GET['NUTR_CONT9'];
        History::Create([
            'created_at' => now(),
            'user_id' => Auth::user()->id,
            'DESC_KOR' => $DESC_KOR,
            'ANIMAL_PLANT' => $ANIMAL_PLANT,
            'SERVING_WT' => $SERVING_WT,
            'NUTR_CONT1' => $NUTR_CONT1,
            'NUTR_CONT2' => $NUTR_CONT2,
            'NUTR_CONT3' => $NUTR_CONT3,
            'NUTR_CONT4' => $NUTR_CONT4,
            'NUTR_CONT5' => $NUTR_CONT5,
            'NUTR_CONT6' => $NUTR_CONT6,
            'NUTR_CONT7' => $NUTR_CONT7,
            'NUTR_CONT8' => $NUTR_CONT8,
            'NUTR_CONT9' => $NUTR_CONT9,
        ]);
        return view('barcode',['result'=>0])->with('alert', '영양 정보 저장됨');
    }
}
