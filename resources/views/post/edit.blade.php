<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update post</title>
</head>
<body>

<h1>Update post</h1>
<form action="{{ url('post/update',$post->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{ $post->title }}" placeholder="Title">
    <br>
    <br>
    <textarea name="details" id="" cols="30" rows="10" placeholder="Details">{{ $post->details }}</textarea>
    <br>
    <button>Update</button>
</form>

</body>
</html>