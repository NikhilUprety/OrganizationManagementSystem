<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
</head>
<body>
    <h2>Post List</h2>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><?= $post['name'] ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?entity=post&action=create">Create Post</a>
</body>
</html>
