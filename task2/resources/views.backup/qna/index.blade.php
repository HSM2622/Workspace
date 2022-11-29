<div class="h-screen px-64 mt-5">
    <div class="float-right">
        <a href="/qna/create">
            <button class= "bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 border border-gray-900">글작성</button>
        </a>
    </div>
    <div class="border-b-4 border-gray-800 mt-12 mb-5">
        <h1 class="text-3xl font-bold">QNA</h1>
    </div>
    <ul class="p-3">
        @foreach($qnas as $qna)
            <a href="/qna/{{ $qna->id }}">
                <li class="border-4 border-gray-500 px-2 py-2 mt-4">제목 : {{ $qna-> title }} <small class="float-right">created_at {{ $qna -> created_at}}</small><br>
                내용 : {{ $qna -> body }} </li>
            </a>   
            <a href="/qna/{{$qna -> id}}/edit">      
            <button>수정</button>
            </a>
            <form method="POST" action="/qna/{{ $qna->id }}">
            @method('DELETE')
            @csrf
            <button type="submit">삭제</button>    
</form>

        @endforeach
    </ul>    
    {!! $qnas->render() !!}
</div>