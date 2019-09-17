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
<a href="<?php echo url('posts') ?>">Posts</a>
||
<a href="<?php echo url('comment/create') ?>">Add new Comment</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Post Id</th>
        <th>Comment</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($comments as $comment) { ?>
        <tr>
            <td><?php echo $comment->id ?></td>
            <td><?php echo $comment->post_id ?></td>
            <td><?php echo $comment->comment ?></td>
            <td>
                <a href="<?php echo url('comment/edit',$comment->id) ?>">Edit</a>
                <form action="<?php echo url('comment/delete',$comment->id) ?>" method="post">
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