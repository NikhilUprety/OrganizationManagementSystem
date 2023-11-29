<?php
// Include necessary files and instantiate objects
require_once 'WorkDaysModel.php';
require_once 'WorkDaysController.php';

$db = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
$model = new WorkDaysModel($db);
$controller = new WorkDaysController($model);

// Route requests to the appropriate controller method based on the action parameter
$action = isset($_GET['action']) ? $_GET['action'] : 'create';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'update':
        $officerId = isset($_GET['id']) ? $_GET['id'] : null;
        $controller->update($officerId);
        break;
    case 'delete':
        $officerId = isset($_GET['id']) ? $_GET['id'] : null;
        $controller->delete($officerId);
        break;
    // Add other cases as needed
}
?>
