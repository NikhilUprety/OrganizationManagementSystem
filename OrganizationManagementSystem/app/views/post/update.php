<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
</head>
<body>
    <h2>Update Post</h2>
    <form method="post" action="index.php?entity=post&action=update&id=<?= $post['id'] ?>">
        <label for="name">Post Name:</label>
        <input type="text" id="name" name="name" value="<?= $post['name'] ?>" required>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="index.php?entity=post&action=index">Back to Post List</a>
</body>
</html>
