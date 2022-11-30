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
        <div class="flex w-[90%] h-4/5 max-h-[90%] bg-gray-200 items-center border-x-[1px] border-gray-300 flex-col">
          <div class="flex w-full h-16 border-y-2 border-black justify-center items-center text-[17px] font-[600]">
            <div class="flex w-[5%] justify-center">No</div>
            <div class="flex w-[10%] justify-center">카테고리</div>
            <div class="flex w-[55%] justify-center">제목</div>
            <div class="flex w-[10%] justify-center">글쓴이</div>
            <div class="flex w-[10%] justify-center">작성시간</div>
            <div class="flex w-[5%] justify-center">조회수</div>
            <div class="flex w-[5%] justify-center">좋아요</div>
          </div>
          <div class="flex w-full h-14 bg-gray-100 border-b-2 border-black justify-center items-center text-[15px]">
          <div class="flex w-[5%] justify-center">{{ $qna -> id }}</div>
              <div class="flex w-[10%] justify-center">{{ $qna -> category }}</div>
              <div class="flex w-[55%] justify-center cursor-pointer">{{ $qna -> title }}</div>
              <div class="flex w-[10%] justify-center">{{ $qna -> user_name }}</div>
              <div class="flex w-[10%] justify-center">{{ $qna -> created_at }}</div>
              <div class="flex w-[5%] justify-center">{{ $qna -> hits }}</div>
              <div class="flex w-[5%] justify-center">{{ $qna -> likes }}</div>
          </div>
          <div class="flex w-full min-h-3/4 h-3/4 bg-white border-b-2 border-black text-[14px] p-6 flex-col overflow-auto">
            <div class="flex w-full mb-5 flex-col border-b-2 border-gray-200 p-7">
            {{ $qna -> body }}
            </div>
            <!-- <div class="flex w-full justify-center items-center mt-5">
              <div class="flex w-1/4 h-[500px] bg-gray-200 justify-center items-center mr-5">사진 있으면 사진 1</div>
              <div class="flex w-1/4 h-[500px] bg-gray-200 justify-center items-center mr-5">사진 있으면 사진 2</div>
              <div class="flex w-1/4 h-[500px] bg-gray-200 justify-center items-center mr-5">사진 있으면 사진 3</div>
            </div> -->
          </div>
          <div class="flex w-full h-14 border-b-2 justify-between border-black items-center">
            <button class="flex w-32 h-10 bg-gray-400 float-left ml-5 rounded-full text-white justify-center items-center"><a href="{{url('qna')}}">글 목록</a></button>
            <div class="flex h-full justify-center items-center">
              @if($permission == true)
              <a href="{{$qna -> id}}/edit" type="button" class="flex w-20 h-10 bg-button rounded-full justify-center items-center text-white mr-2">수정</a>
              <form method="POST" action="/qna/{{ $qna->id }}">
                @method('DELETE')
                @csrf
                <button class="flex w-20 h-10 bg-red-600 rounded-full justify-center items-center text-white mr-5">삭제</button>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endsection
    </body> 
</html>