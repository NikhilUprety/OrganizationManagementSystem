<?php
require_once 'config.php';
require_once 'app/models/PostModel.php';
require_once 'app/controllers/PostController.php';

$postModel = new PostModel($conn);
$postController = new PostController($postModel);

$action = $_GET['action'] ?? 'index';

switch ($_GET['entity']) {
    case 'post':
        if ($action === 'update' && isset($_GET['id'])) {
            $postController->{$action}($_GET['id']);
        } else {
            $postController->{$action}();
        }
        break;
}
