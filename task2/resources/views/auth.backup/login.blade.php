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
          <div class="flex w-[22vw] h-4/5 justify-center items-center bg-gray-100 flex-col rounded-r-2xl">
            <label class="flex text-[25px] font-semibold justify-center items-center text-gray-600 mb-7">
              <img src="{{URL::asset('/images/person.png')}}" class="w-20 mr-2.5" />
              Login to your account
            </label>
            <div class="flex w-full justify-center items-center flex-col">
              <input class="flex w-4/5 h-10 mb-2 border-[1px] border-gray-300 rounded p-3 focus:outline-none" placeholder="이메일" type="email">
              <input class="flex w-4/5 h-10 mb-8 border-[1px] border-gray-300 rounded p-3 focus:outline-none" placeholder="비밀번호" type="password">
            </div>
            <div class="flex w-4/5 mb-8 justify-end items-center">
              <button class="flex w-3/5 h-12 justify-center items-center bg-button rounded-3xl text-white font-[600] hover:bg-hover hover:transition">
                Sign in
              </button>
            </div>
            <div class="flex w-4/5 justify-end flex-wrap">
              <label class="text-gray-400">Dont'have an account? &nbsp;</label>
              <label class="text-button cursor-pointer">
                Create account
              </label>
              <label class="text-gray-400 cursor-pointer">
                Forgot your password?
              </label>
            </div>
          </div>
        </div>
      </div>
      @endsection
    </body> 
</html>