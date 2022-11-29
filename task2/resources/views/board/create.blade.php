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

      <div class="flex w-full h-[88vh] items-center flex-col">
      <div class="flex w-full h-[10%] mb-[3%] justify-center items-center bg-gray-200 text-4xl font-[700]">게시판</div>
      <form action="/store" id="store" method="POST" class="flex w-[90%] h-3/4 bg-gray-200  border-x-[1px] border-gray-300 flex-col">
      {{ csrf_field() }}  
      <div class="flex w-full h-14 border-y-2 border-black justify-center items-center text-[18px] font-[600]">글 쓰기</div>
        <div class="flex w-full h-12 border-b-2 border-black justify-between items-center bg-gray-100 text-[18px] font-[600]">
          <div class="flex w-1/2 h-full justify-center items-center">
            제목<input name="title" class="flex w-[70%] h-full ml-4 p-2 text-[15px] border-[1px] border-gray-400 rounded" placeholder="제목을 작성해주세요"></input>
          </div>
          <div class="flex w-1/2 h-full justify-center items-center">
            카테고리
          </div>
        </div>
        <div class="flex w-full h-[75%] bg-white justify-center items-center p-2 text-[20px] font-[600] flex-col border-b-2 border-black">
          <lbael class="flex w-[88%]">내용</lbael>
          <textarea name="body" class="flex w-[88%] h-[70%] border-[1px] border-gray-400 mt-2 resize-none p-3 focus:outline-none"></textarea>
          <div class="flex w-[88%] h-[1px] bg-gray-300 mt-5"></div>
          <div class="flex w-[88%] h-10 mt-5">
            <label class="flex w-32 h-full bg-button justify-center items-center text-white rounded-full text-[18px] cursor-pointer">
              이미지 선택
              <input type="file" class="hidden" accept="image/*" />
            </label>
          </div>
        </div>
        <div class="flex w-full h-14 justify-center items-center border-b-2 border-black">
          <div class="flex w-[80%] h-full justify-center items-center ml-[10%]">
            <input type="submit" class="flex w-32 h-10 bg-button justify-center items-center text-white rounded-full text-[18px]"></input>
          </div>
        </form>
          <button class="flex w-32 h-10 bg-gray-400 justify-center items-center text-white rounded-full text-[18px]">
            목록으로
          </button>
        </div>
      </div>
    </div>
      @endsection
    </body> 
</html>