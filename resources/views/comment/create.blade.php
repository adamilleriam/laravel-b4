@extends('layouts.master')
@section('title','Create new comment')
@section('content')
    <h1>Create new comment</h1>
    <form action="{{ url('comment/store') }}" method="post">
        @csrf
        <input type="number" name="post_id" min="1" required placeholder="Enter post id here">
        <br>
        <br>
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter comment here"></textarea>
        <br>
        <br>
        <button>Save</button>
    </form>
@endsection