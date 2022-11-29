</div>

    타이틀 : {{ $qna -> title }} <small class="float-right">created_at {{ $qna -> created_at }}</small><br>
    <small class="float-right">updated_at {{ $qna -> updated_at }}</small><br>
    <small class="float-right">작성자 {{ $qna->user_id }}</small><br>    
    내용
    <div class="border p-3 my-3">{{ $qna -> body }}</div>
    
    <div>
 </div>