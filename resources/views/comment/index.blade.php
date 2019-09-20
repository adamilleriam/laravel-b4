<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of comments</title>
</head>
<body>
<h1>List of comments</h1>
<a href="{{ url('posts') }}">Posts</a>
||
<a href="{{ url('comment/create') }}">Add new Comment</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Post Id</th>
        <th>Comment</th>
        <th>Actions</th>
    </tr>
    @foreach ($comments as $comment)
        <tr>
            <td>{{ $comment->id }}</td>
            <td>{{ $comment->post_id }}</td>
            <td>{{ $comment->comment }}</td>
            <td>
                <a href="{{ url('comment/edit',$comment->id) }}">Edit</a>
                <form action="{{ url('comment/delete',$comment->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>