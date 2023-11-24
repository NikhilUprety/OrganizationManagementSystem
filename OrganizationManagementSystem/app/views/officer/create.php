<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Officer</title>
</head>
<body>
    <h2>Create Officer</h2>
    <form method="post" action="index.php?entity=officer&action=create">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="post_id">Post ID:</label>
        <input type="text" id="post_id" name="post_id" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
        <br>
        <label for="work_start_time">Work Start Time:</label>
        <input type="text" id="work_start_time" name="work_start_time" required>
        <br>
        <label for="work_end_time">Work End Time:</label>
        <input type="text" id="work_end_time" name="work_end_time" required>
        <br>
        <button type="submit">Create</button>
    </form>
    <br>
    <a href="index.php?entity=officer&action=index">Back to Officer List</a>
</body>
</html>
