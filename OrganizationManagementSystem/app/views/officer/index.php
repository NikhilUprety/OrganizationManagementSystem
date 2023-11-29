<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer List</title>
</head>
<body>
    <h2>Officer List</h2>
    <ul>
        <?php foreach ($officers as $officer): ?>
            <li><?= $officer['name'] ?> - <?= $officer['post_id'] ?> - <?= $officer['status'] ?> - <?= $officer['work_start_time'] ?> - <?= $officer['work_end_time'] ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?entity=officer&action=create">Create Officer</a>
</body>
</html>
