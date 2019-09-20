@extends('layouts.master')
@section('title','Edit comment')
@section('content')
    <h1>Edit comment</h1>
    <form action="{{ route('comment.update',$comment->id) }}" method="post">
        @csrf
        @method('put')
        <input value="{{ $comment->post_id }}" type="number" name="post_id" min="1" required placeholder="Enter post id here">
        <br>
        <br>
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter comment here">{{ $comment->comment }}</textarea>
        <br>
        <br>
        <button>Update</button>
    </form>
@endsection
