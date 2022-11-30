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
      <div class="flex w-full min-h-[88vh] items-center flex-col">
        <div class="flex w-full h-[10%] justify-center items-center bg-gray-200 text-4xl font-[700]">게시판</div>
        <div class="flex w-[90%] h-full max-h-[90%] bg-gray-200 items-center border-x-[1px] border-gray-300 flex-col mb-2">
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
          <div class="flex w-full min-h-[40%] h-[40%] bg-white border-b-2 border-black text-[14px] p-6 flex-col overflow-auto">
            <div class="flex w-full mb-5 flex-col border-b-2 border-gray-200 p-7">
            {{ $qna -> body }}
          </div>
        </div>
        <div class="flex w-full min-h-[50%] h-[50%] border-b-2 items-center p-3 border-black flex-col overflow-auto">
          @foreach ($comments as $comment)
          <div class="flex w-full">
          <form method="POST" action="/qna/comment/delete" class="flex w-full h-12 border-b-[1px] justify-center border-gray-400 p-3"> 
              @csrf
              <div class="flex w-[10%] h-full justify-center items-center">{{$comment['user_name']}}<!-- 댓글 내용, 작성자 --></div>
              <div class="flex w-[85%] h-full p-3 items-center border-l-[1px] border-gray-400">{{$comment['body']}}<!-- 댓글 내용, 작성자 --></div>
              <input name="comment_id" value="{{$comment['id']}}" class="hidden">
              <input name="qna_id" value="{{$qna -> id}}" class="hidden">
              <input name="commenter" value="{{$comment['user_id']}}" class="hidden">
              <button class="flex w-[5%] h-full justify-center items-center bg-red-600 ml-3 rounded-full text-white"><!-- 댓글 삭제 버튼 -->삭제</a>
            </form>
            </div>
            @endforeach
          </div>
          <form method="POST" action="/qna/comment" class="flex w-full h-1/4 border-b-2 justify-between items-center p-3 border-black">
            @csrf
            <!-- <div class="flex w-full h-1/4 border-b-2 justify-between items-center p-3 border-black"> -->
              <textarea name="body" class="flex w-[90%] h-5/6 border-[1px] border-gray-400 mt-2 resize-none p-3 focus:outline-none mr-2"></textarea>
              <input name="qna_id" value="{{$qna -> id}}" class="hidden">
            <button class="flex w-[10%] h-10 bg-button bl-2 rounded-full justify-center items-center text-white">작성</button>
          <!-- </div> -->
          </form>
          <div class="flex w-full h-14 border-b-2 justify-between border-black items-center">
            <button class="flex w-32 h-10 bg-gray-400 float-left ml-5 rounded-full text-white justify-center items-center"><a href="{{url('qna')}}">글 목록</a></button>
            <div class="flex h-full justify-center items-center">
              @if($permission == true)
              <a href="{{$qna -> id}}/edit" type="button" class="flex w-20 h-10 bg-button rounded-full justify-center items-center text-white mr-2">수정</a>
              <form method="POST" action="/qna/{{ $qna->id }} class="hidden">
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