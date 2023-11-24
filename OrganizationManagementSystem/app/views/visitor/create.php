<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Visitor</title>
</head>
<body>
    <h2>Create Visitor</h2>
    <form method="post" action="index.php?entity=visitor&action=create">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="mobile_no">Mobile No:</label>
        <input type="text" id="mobile_no" name="mobile_no" required>
        <br>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
        <br>
        <button type="submit">Create</button>
    </form>
    <br>
    <a href="index.php?entity=visitor&action=index">Back to Visitor List</a>
</body>
</html>
