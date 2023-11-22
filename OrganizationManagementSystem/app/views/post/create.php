<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h2>Create Post</h2>
    <form method="post" action="index.php?entity=post&action=create">
        <label for="name">Post Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create</button>
    </form>
    <br>
    <a href="index.php?entity=post&action=index">Back to Post List</a>
</body>
</html>
