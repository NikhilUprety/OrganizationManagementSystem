<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor List</title>
</head>
<body>
    <h2>Visitor List</h2>
    <ul>
        <?php foreach ($visitors as $visitor): ?>
            <li><?= $visitor['name'] ?> - <?= $visitor['mobile_no'] ?> - <?= $visitor['email'] ?> - <?= $visitor['status'] ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?entity=visitor&action=create">Create Visitor</a>
</body>
</html>
