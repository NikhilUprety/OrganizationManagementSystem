<?php
// Include necessary files and instantiate objects
require_once 'ActivityModel.php';
require_once 'ActivityController.php';

$db = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
$model = new ActivityModel($db);
$controller = new ActivityController($model);

// Route requests to the appropriate controller method based on the action parameter
$action = isset($_GET['action']) ? $_GET['action'] : 'create';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'update':
        $activityId = isset($_GET['id']) ? $_GET['id'] : null;
        $controller->update($activityId);
        break;
    case 'cancel':
        $activityId = isset($_GET['id']) ? $_GET['id'] : null;
        $controller->cancel($activityId);
        break;
    // Add other cases as needed
}
?>
