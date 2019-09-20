<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new comment</title>
</head>
<body>
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
</body>
</html>