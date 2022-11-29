</div>

타이틀
<form method="POST" action="/qna/{{ $qna->id }}">
    <input value="{{ $qna -> title }}" name="title"></input>
    <small class="float-right">created_at {{ $qna -> created_at }}</small><br>
    <small class="float-right">updated_at {{ $qna -> updated_at }}</small><br>
    <small class="float-right">작성자 {{ $qna->user_id }}</small><br>    
    내용
    <textarea type="text" name="body" style="width:500px;height:200px;font-size:15px;">{{$qna->body}}</textarea>
    <a href="/qna"><button>취소</button></a>
        @method('PUT')
        @csrf
        <button type="submit">수정</button>
    </form>
    <div>
 </div>