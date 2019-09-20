@extends('layouts.master')
@section('title','Edit Post')
@section('content')
    <h1>Update post</h1>
    <form action="{{ route('post.update',$post->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{ $post->title }}" placeholder="Title">
        <br>
        <br>
        <textarea name="details" id="" cols="30" rows="10" placeholder="Details">{{ $post->details }}</textarea>
        <br>
        <button>Update</button>
    </form>
@endsection