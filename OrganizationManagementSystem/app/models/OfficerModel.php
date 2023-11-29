<?php
class OfficerModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllOfficers() {
        $sql = "SELECT * FROM officers";
        $result = $this->conn->query($sql);

        $officers = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $officers[] = $row;
            }
        }

        return $officers;
    }

    public function createOfficer($name, $postId, $status, $workStartTime, $workEndTime) {
        $name = $this->conn->real_escape_string($name);
        $postId = $this->conn->real_escape_string($postId);
        $status = $this->conn->real_escape_string($status);
        $workStartTime = $this->conn->real_escape_string($workStartTime);
        $workEndTime = $this->conn->real_escape_string($workEndTime);

        $sql = "INSERT INTO officers (name, post_id, status, work_start_time, work_end_time) VALUES ('$name', '$postId', '$status', '$workStartTime', '$workEndTime')";
        
        return $this->conn->query($sql);
    }

}
