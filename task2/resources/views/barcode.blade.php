<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TheWeighter</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
      @extends('layouts.layout')

      @section('content')
      <div class="flex w-full h-[88vh] justify-center items-center border-b-1 flex-col bg-gray-200">
        <div class="flex w-4/5 h-[80%] bg-white rounded-2xl items-center justify-center shadow-shadow">
          <form method="POST" action="/select"  class="flex w-[30%] h-full flex-col items-center justify-center">
          {{ csrf_field() }}
            <div class="input-field">
              <label class="flex w-[23vw] h-[23vw] bg-gray-200 rounded-2xl shadow-shadow items-center justify-center cursor-pointer flex-col mb-4">
                <label class="flex w-1/2 text-gray-400 cursor-pointer">{{ svg('heroicon-o-camera') }}</label>
                클릭하여 이미지를 첨부합니다.
                <input type="file" accept="image/*" class="hidden">
              </label>
              <input id="isbn_input" name="barcode_id" class="isbn w-full h-7 text-center" type="text"/>
              <button class="icon-barcode button scan"></button>
              <script src= "{{ URL::asset('./js/quaggaJS/dist/quagga.js') }}"></script> 
              <script src="{{ URL::asset('./js/barcode.js') }}" type="text/javascript"></script>
            </div>
            <div class="flex w-full flex-row justify-center">
              <button type="submit" class="flex w-36 h-12 items-center justify-center bg-button rounded-lg shadow-shadow mt-7 text-white text-[15px] hover:bg-hover hover:transition">바코드 분석</a>
            </div>
          </form>
          <div class="flex w-3/5 h-full flex-col items-center justify-center">
            <div class="flex w-[90%] h-4/5 bg-gray-200 rounded-lg p-5 flex-col overflow-auto">
              <div class="flex w-[20%] h-[10%] p-5 bg-gray-400 items-center justify-center text-[25px] rounded-lg text-[550] mb-5">분석 결과</div>
              @if($result != 0)
              <form method="POST" action="/save">
              {{ csrf_field() }}
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">제품명</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['DESC_KOR'] }}</div>
                <input name="DESC_KOR" value="{{ $result['DESC_KOR'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">제조업체</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['ANIMAL_PLANT'] }}</div>
                <input name="ANIMAL_PLANT" value="{{ $result['ANIMAL_PLANT'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">1회제공량 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['SERVING_WT'] }}</div>
                <input name="SERVING_WT" value="{{ $result['SERVING_WT'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">열량 (kcal)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT1'] }}</div>
                <input name="NUTR_CONT1" value="{{ $result['NUTR_CONT1'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">탄수화물 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT2'] }}</div>
                <input name="NUTR_CONT2" value="{{ $result['NUTR_CONT2'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">단백질 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT3'] }}</div>
                <input name="NUTR_CONT3" value="{{ $result['NUTR_CONT3'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">지방 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT4'] }}</div>
                <input name="NUTR_CONT4" value="{{ $result['NUTR_CONT4'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">당류 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT5'] }}</div>
                <input name="NUTR_CONT5" value="{{ $result['NUTR_CONT5'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">나트륨 (mg)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT6'] }}</div>
                <input name="NUTR_CONT6" value="{{ $result['NUTR_CONT6'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">콜레스테롤 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT7'] }}</div>
                <input name="NUTR_CONT7" value="{{ $result['NUTR_CONT7'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">포화지방산 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT8'] }}</div>
                <input name="NUTR_CONT8" value="{{ $result['NUTR_CONT8'] }}" class="hidden">
              </div>
              <div class="flex w-full justify-center items-center flex-row mb-5">
                <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400">트랜스지방산 (g)</div>
                <div class="flex w-2/4 h-10 justify-center items-center bg-white">{{ $result['NUTR_CONT9'] }}</div>
                <input name="NUTR_CONT9" value="{{ $result['NUTR_CONT9'] }}" class="hidden">
              </div>
              @if($permission == true)
              <button type="submit" class="flex w-36 h-12 items-center justify-center bg-button rounded-lg shadow-shadow mt-7 text-white text-[15px] hover:bg-hover hover:transition">영양정보 등록</button>
              @endif
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endsection
    </body> 
    </html>