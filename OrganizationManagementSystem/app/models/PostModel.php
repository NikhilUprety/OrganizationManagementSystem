<?php
class PostModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllPosts() {
        $sql = "SELECT * FROM posts";
        $result = $this->conn->query($sql);

        $posts = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }

        return $posts;
    }

    public function createPost($name) {
        $name = $this->conn->real_escape_string($name);
        $sql = "INSERT INTO posts (name) VALUES ('$name')";
        
        return $this->conn->query($sql);
    }
    public function getPostById($postId) {
        $postId = $this->conn->real_escape_string($postId);
        $sql = "SELECT * FROM posts WHERE id = $postId";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        }

        return null;
    }

    public function updatePost($postId, $name) {
        $postId = $this->conn->real_escape_string($postId);
        $name = $this->conn->real_escape_string($name);
        $sql = "UPDATE posts SET name = '$name' WHERE id = $postId";
        
        return $this->conn->query($sql);
    }
}
