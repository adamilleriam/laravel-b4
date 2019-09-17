<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of posts</title>
</head>
<body>
<h1>List of posts</h1>
<a href="<?php echo url('post/create') ?>">Create new post</a>
<a href="<?php echo url('comment/create') ?>">Add new Comment</a>
<br>
<br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Details</th>
        <th>Action</th>
    </tr>
    <?php foreach ($posts as $post){ ?>
        <tr>
            <td><?php echo $post->id ?></td>
            <td><?php echo $post->title ?></td>
            <td><?php echo $post->details ?></td>
            <td>
                <a href="<?php echo url('post/edit',$post->id) ?>">Edit</a>
                <form action="<?php echo url('post/delete',$post->id) ?>" method="post">
                    <?php echo csrf_field() ?>
                    <input type="hidden" name="_method" value="delete">
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>