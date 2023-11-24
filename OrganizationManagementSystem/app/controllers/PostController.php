<?php
date_default_timezone_set('Nepal');
class PostController {
    private $postModel;

    public function __construct($postModel) {
        $this->postModel = $postModel;
    }

    public function index() {
        $posts = $this->postModel->getAllPosts();
        include 'app/views/post/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $this->postModel->createPost($name);
            header("Location: index.php?entity=post&action=index");
            exit();
        }

        include 'app/views/post/create.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postId = $_GET['id'];
            $name = $_POST['name'];
            $this->postModel->updatePost($postId, $name);
            header("Location: index.php?entity=post&action=index");
            exit();
        } else {
            // Display the update form
            $postId = $_GET['id'];
            $post = $this->postModel->getPostById($postId);

            if ($post) {
                include 'app/views/post/update.php';
            } else {
                // Handle invalid post ID (e.g., redirect to error page)
                echo "Invalid Post ID";
            }
        }
    }
}
