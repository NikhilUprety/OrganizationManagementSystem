<?php
require_once 'config.php';
require_once 'app/models/PostModel.php';
require_once 'app/controllers/PostController.php';

require_once 'app/models/VisitorModel.php';
require_once 'app/controllers/VisitorController.php';

require_once 'app/models/OfficerModel.php';
require_once 'app/controllers/OfficerController.php';


$postModel = new PostModel($conn);
$postController = new PostController($postModel);

$visitorModel = new VisitorModel($conn);
$visitorController = new VisitorController($visitorModel);

$officerModel = new OfficerModel($conn);
$officerController = new OfficerController($officerModel);

$action = $_GET['action'] ?? 'index';

switch ($_GET['entity']) {
    case 'post':
        if ($action === 'update' && isset($_GET['id'])) {
            $postController->{$action}($_GET['id']);
        } else {
            $postController->{$action}();
        }
        break;

        case 'visitor':
            if ($action === 'update' && isset($_GET['id'])) {
                // For update action, pass the visitor ID to the update method
                $visitorController->{$action}($_GET['id']);
            } else {
                // For other actions, just call the method
                $visitorController->{$action}();
            }
            break;

            case 'officer':
                if ($action === 'update' && isset($_GET['id'])) {
                    // For update action, pass the officer ID to the update method
                    $officerController->{$action}($_GET['id']);
                } else {
                    // For other actions, just call the method
                    $officerController->{$action}();
                }
                break;
}
