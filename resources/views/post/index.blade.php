@extends('layouts.master')
@section('title','List of Posts')
@section('content')
    <h1>List of posts</h1>
    <a href="{{ url('post/create') }}">Create new post</a>
    ||
    <a href="{{ url('comments') }}">Comments</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->details }}</td>
                <td>
                    <a href="{{ url('post/edit',$post->id) }}">Edit</a>
                    <form action="{{ url('post/delete',$post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection