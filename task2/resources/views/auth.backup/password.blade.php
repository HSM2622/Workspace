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
      <div class="flex w-full h-[88vh] justify-center items-center border-b-[1px] border-gray-200 bg-login">
        <div class="flex w-1/2 h-4/5 justify-center items-center rounded-lg shadow-shadow bg-white">
          <img src="{{URL::asset('/images/login_background.png')}}" class="w-3/7 h-4/5" />
          <div class="flex w-[22vw] h-4/5 justify-center items-center bg-gray-100 rounded-r-2xl flex-col">
            <label class="flex text-[25px] font-semibold justify-center items-center text-gray-600 mb-5">
              <img src="{{URL::asset('/images/unlock.png')}}" class="w-20 mr-2.5" />
              비밀번호 찾기
            </label>
            <label class="flex text-[12px] text-gray-400">계정 생성 시 입력했던 이름과 이메일을 입력하세요.</label>
            <div class="flex justify-center items-center flex-wrap my-3">
              <input type="text" id="first-name" class="flex w-[39%] h-10 bg-white mr-2 rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="성">
              <input type="text" id="last-name" class="flex w-[39%] h-10 bg-white rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="이름">
              <input type="email" id="email" class="flex w-4/5 h-10 bg-white rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="이메일">
            </div>
            <label class="flex w-4/5 text-[14px] text-red-600 justify-end">이름 또는 이메일 주소가 일치하지 않습니다.</label>
            <div class="flex w-4/5 justify-end">
              <button class="flex w-1/2 h-12 bg-button justify-center items-center text-[18px] text-white rounded-3xl mt-5">확인</button>
            </div>
          </div>
        </div>
      </div>  
      @endsection
    </body> 
</html>