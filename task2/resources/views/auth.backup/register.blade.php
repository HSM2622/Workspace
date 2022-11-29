<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  @extends('layouts.layout')

  @section('content')
  <div class="flex w-full h-[88vh] justify-center items-center border-b-1 border-gray-500 bg-login">
    <div class="flex w-1/2 h-4/5 justify-center items-center rounded-lg shadow-shadow bg-white">
      <img src="{{URL::asset('/images/login_background.png')}}" class="flex w-3/7 h-5/6" />
      <div class="flex w-[22vw] h-5/6 justify-center items-center bg-gray-100 flex-col rounded-r-2xl">
        <div class="flex text-[25px] font-semibold justify-center items-center text-gray-600 mb-7">
          <img src="{{URL::asset('/images/rock.png')}}" class="flex w-16 mr-2.5" />
          Create Account
        </div>
        <div class="flex justify-center items-center flex-wrap mb-5">
          <input type="text" id="first-name" class="flex w-[39%] h-10 bg-white mr-2 rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="성">
          <input type="text" id="last-name" class="flex w-[39%] h-10 bg-white rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="이름">
          <input type="email" id="email" class="flex w-4/5 h-10 bg-white rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="이메일">
          <input type="password" id="password" class="flex w-4/5 h-10 bg-whiterounded mb-2 border-[1px] border-gray-300 p-3" placeholder="비밀번호">
          <div class="flex w-4/5 h-10 justify-end flex-wrap mb-1 text-gray-400 text-[12px]">
            <label>8 - 14 charaters Required(0-9, a-z, A-Z)</label>
            <label>Special characters Required(!, @, #, $, %)</label>
          </div>
          <input type="password" id="confirm-password" class="flex w-4/5 h-10 bg-white rounded mb-2 border-[1px] border-gray-300 p-3" placeholder="비밀번호 확인">
          <div class="flex w-4/5 justify-end flex-wrap mb-1">
            <label class="text-red-600">Please Check Password & Confirm Password</label>
          </div>
          <div class="flex w-4/5 h-10 justify-end items-center flex-wrap mb-1 mt-2.5 text-[15px]">
            I Agree to&nbsp;<label class="text-button cursor-pointer">Terms Of Service</label>&nbsp;and&nbsp;
            <label class="text-button cursor-pointer mr-1">Privacy Policy.</label>
            <input type="checkbox" />
          </div>
        </div>
        <div class="flex w-5/6 h-1/7 justify-end items-center">
          <button>Sign up</button>
        </div>
      </div>
    </div>
  </div>
  @endsection
</body>
</html>