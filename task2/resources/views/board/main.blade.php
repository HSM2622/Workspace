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
      <div class="flex w-full h-[88vh] items-center border-b-1 border-gray-500 flex-col">
        <div class="flex w-full h-[10%] mb-[3%] justify-center items-center bg-gray-200 text-4xl font-[700]">게시판</div>
          <table class="flex w-[90%] h-[80%] justify-center items-center flex-col">
            <thead class="flex w-full h-14 justify-center items-center border-y-2 border-black bg-gray-300">
              <tr class="flex w-full justify-center items-center">
                <th class="flex w-[5%] justify-center">No</th>
                <th class="flex w-[10%] justify-center">카테고리</th>
                <th class="flex w-[55%] justify-center">제목</th>
                <th class="flex w-[10%] justify-center">글쓴이</th>
                <th class="flex w-[10%] justify-center">작성시간</th>
                <th class="flex w-[5%] justify-center">조회수</th>
                <th class="flex w-[5%] justify-center">좋아요</th>
              </tr>
            </thead>
            @foreach($qnas as $qna)
            <tbody class="flex w-full justify-center items-center flex-col">
            <tr class="flex h-12 w-full justify-center items-center border-b-[1px] border-gray-500">
              <td class="flex w-[5%] justify-center">{{ $qna -> id }}</td>
              <td class="flex w-[10%] justify-center">{{ $qna -> category }}</td>
              <td class="flex w-[55%] justify-center cursor-pointer">
              <a href="/qna/{{ $qna->id }}">{{ $qna -> title }}</a>
              </td>
              <td class="flex w-[10%] justify-center">{{ $qna -> user_name }}</td>
              <td class="flex w-[10%] justify-center">{{ $qna -> created_at }}</td>
              <td class="flex w-[5%] justify-center">{{ $qna -> hits }}</td>
              <td class="flex w-[5%] justify-center">{{ $qna -> likes }}</td>
            </tr> 
        </tbody>
        @endforeach
            <tbody class="flex w-full justify-center items-center flex-col">
              <tr class="flex w-full h-14 justify-between items-center bg-gray-300 border-t-[1px] border-b-2 border-black">
                <td class="flex w-[90%] h-14 justify-center items-center">
              {!! $qnas->render() !!}
              </td>
              <td class="flex w-[10%] h-10 text-white bg-button justify-center items-center mr-[2%] rounded-full hover:bg-hover hover:transition">
                <a href="/qna/create" type="button">글 쓰기</a>
              </td>
            </tbody>
          </table>
        </div>
      </div>  
      @endsection
    </body> 
</html>