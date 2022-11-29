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
        <div class="flex w-[30%] h-full flex-col items-center justify-center">
            <label class="flex w-[23vw] h-[23vw] bg-gray-200 rounded-2xl shadow-shadow items-center justify-center flex-col cursor-pointer">
            <label class="flex w-1/2 text-gray-400">{{ svg('heroicon-o-camera') }}</label>
              클릭하여 이미지를 첨부합니다.
              <input type="file" class="hidden" accept="image/*"></input>
            </label>
          <label>barcode</label>
          <div class="flex w-full flex-row justify-around">
            <button class="flex w-36 h-12 items-center justify-center bg-button rounded-lg shadow-shadow mt-7 text-white text-[15px] hover:bg-hover hover:transition">바코드 분석</button>
            <button class="flex w-36 h-12 items-center justify-center bg-button rounded-lg shadow-shadow mt-7 text-white text-[15px] hover:bg-hover hover:transition">영양정보 등록</button>
          </div>
        </div>
        <div class="flex w-3/5 h-full flex-col items-center justify-center">
          <div class="flex w-[90%] h-4/5 bg-gray-200 rounded-lg p-5 flex-col overflow-auto">
            <div class="flex w-[20%] h-[10%] p-5 bg-gray-400 items-center justify-center text-[25px] rounded-lg text-[550] mb-5">분석 결과</div>
                <div class="flex w-full h-2/5 justify-center items-center flex-row mb-5">
                  <div class="flex w-1/4 h-10 justify-center items-center bg-gray-400"></div>
                  <div class="flex w-2/4 h-10 justify-center items-center bg-white"></div>
                </div>
          </div>
        </div>
      </div>
    </div>
      @endsection
    </body> 
</html>