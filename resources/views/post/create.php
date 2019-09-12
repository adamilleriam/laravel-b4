<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new post</title>
</head>
<body>

    <h1>Create new post</h1>
<form action="<?php echo url('post/store') ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="Title">
    <br>
    <br>
    <textarea name="details" id="" cols="30" rows="10" placeholder="Details"></textarea>
    <br>
    <button>Save</button>
</form>

</body>
</html>