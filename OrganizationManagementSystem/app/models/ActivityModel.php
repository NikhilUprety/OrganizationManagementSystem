<?php

class ActivityModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createActivity($data) {
        // Implement code to insert a new activity into the database
        // Use $this->db to interact with the database
    }

    public function updateActivity($activityId, $data) {
        // Implement code to update an existing activity in the database
    }

    public function cancelActivity($activityId) {
        // Implement code to cancel an activity in the database
    }
    
    // Add other methods for CRUD operations as needed
}
?>
