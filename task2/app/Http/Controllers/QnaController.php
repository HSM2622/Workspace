<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Qna;
use App\Models\Comment;

class QnaController extends Controller
{
    public function __construct(){
   $this->middleware('auth')->except('index');
}

public function index()
{   
  $qnas = DB::table('qnas')->OrderBy('created_at', 'desc') -> paginate(10);        
  return view('board.main', [
  'qnas' => $qnas            
  ]);
}

public function create()
{
  return view('board.create');
}

public function show($id){
    $qnas = Qna::find($id);
    $user = auth()->user();
    if ($user->id != $qnas->user_id)
    $permission = false;
    else        
    $permission = true;
    $hits = $qnas->hits + 1;
    Qna::where('id', $id)->update(['hits' => $hits]);

    $comments = Comment::where('qna_id', $id)->get();
    // dd($comments);
  return view('board.detail', [
  'qna' => $qnas, 'permission' => $permission, 'comments' => $comments        
  ]);
}

public function store()
  {   
    request() -> validate([
    'title' => 'required',
    'body'  => 'required'    
  ]);
  $user = auth()->user();
  $values = request(['title', 'body']);
  $values['user_id'] = $user -> id;
  $values['user_name'] = $user -> name;
  $qna = Qna::create($values);
  return redirect('/qna');
}

public function destroy($id){
  $qnas = Qna::find($id)->delete();
  return redirect('/qna')->with('alert', '삭제됨');;
}

public function edit($id) {
  $qnas = Qna::find($id);        
  return view('board.edit', ['qna' => $qnas]);
}

public function update(Request $request, $id){
  {   
    request() -> validate([
      'title' => 'required',
      'body'  => 'required'    
    ]);
    $values = request(['title', 'body']);
    Qna::where('id', $id)->update(['title' => $request->title, 'body' =>$request->body]);
    // Qna::update($values) -> where('id', $id);
    return redirect('/qna');
  }
}

public function comment(Request $request){
  $user = auth()->user();
  $qna_id = $request -> qna_id;
  // dd($qna_id);
  $values =[
    'user_id' => $user -> id,
    'user_name' => $user -> name,
    'body' => $request -> body,
    'qna_id' => $qna_id,
  ];
  Comment::create($values);
  return redirect("qna/${qna_id}");
}
public function commentDelete(Request $request){
  $commenter = $request -> commenter;
  // dd($commenter);
  $comment_id = $request -> comment_id;
  $qna_id = $request -> qna_id;
  if ($commenter == Auth::user()->id)
  Comment::find($comment_id)->delete();
  return redirect("/qna/${qna_id}")->with('alert', '삭제됨');
}
}
