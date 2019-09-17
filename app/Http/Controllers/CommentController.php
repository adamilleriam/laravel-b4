<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index(){
        $data['comments'] = Comment::all();
        return view('comment/index',$data);
    }
    public function create()
    {
        return view('comment/create');
    }
    public function store(Request $request)
    {
        $data['post_id'] = $request->post_id;
        $data['comment'] = $request->comment;
        Comment::create($data);
        return redirect('comments');
    }
    public function edit($id)
    {
        $data['comment'] = Comment::findOrFail($id);
        return view('comment/edit',$data);
    }
    public function update(Request $request,$id)
    {
        $data['post_id'] = $request->post_id;
        $data['comment'] = $request->comment;
        Comment::findOrFail($id)->update($data);
        return redirect('comments');
    }
}
