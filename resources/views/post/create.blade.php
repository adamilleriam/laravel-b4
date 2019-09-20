@extends('layouts.master')
@section('title','Create new post')
@section('content')
    <h1>Create new post</h1>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <br>
        <br>
        <textarea name="details" id="" cols="30" rows="10" placeholder="Details"></textarea>
        <br>
        <button>Save</button>
    </form>
@endsection