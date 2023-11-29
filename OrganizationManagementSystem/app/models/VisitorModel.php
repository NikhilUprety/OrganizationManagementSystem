<?php
class VisitorModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllVisitors() {
        $sql = "SELECT * FROM visitors";
        $result = $this->conn->query($sql);

        $visitors = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $visitors[] = $row;
            }
        }

        return $visitors;
    }

    public function createVisitor($name, $mobileNo, $email, $status) {
        $name = $this->conn->real_escape_string($name);
        $mobileNo = $this->conn->real_escape_string($mobileNo);
        $email = $this->conn->real_escape_string($email);
        $status = $this->conn->real_escape_string($status);

        $sql = "INSERT INTO visitors (name, mobile_no, email, status) VALUES ('$name', '$mobileNo', '$email', '$status')";
        
        return $this->conn->query($sql);
    }

}
