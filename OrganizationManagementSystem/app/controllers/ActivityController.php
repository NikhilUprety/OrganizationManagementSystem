<?php

class ActivityController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function create() {
        // Handle the creation of a new activity
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'OfficerId' => $_POST['OfficerId'],
                'VisitorId' => $_POST['VisitorId'],
                'Name' => $_POST['Name'],
                'Type' => $_POST['Type'],
                'Status' => $_POST['Status'],
                'date' => $_POST['date'],
                'StartTime' => $_POST['StartTime'],
                'EndTime' => $_POST['EndTime'],
                'AddedOn' => date('Y-m-d H:i:s'), // Current date and time
            ];

            $this->model->createActivity($data);
            // Redirect or show success message
        }

        // Load the view for creating a new activity
    }

    public function update($activityId) {
        // Handle updating an existing activity
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'Name' => $_POST['Name'],
                'Type' => $_POST['Type'],
                'Status' => $_POST['Status'],
                'date' => $_POST['date'],
                'StartTime' => $_POST['StartTime'],
                'EndTime' => $_POST['EndTime'],
                'LastUpdatedOn' => date('Y-m-d H:i:s'), // Current date and time
            ];

            $this->model->updateActivity($activityId, $data);
            // Redirect or show success message
        }

        // Load the view for updating an activity
    }

    public function cancel($activityId) {
        // Handle canceling an activity
        $this->model->cancelActivity($activityId);
        // Redirect or show success message
    }
    
    // Add other methods for CRUD operations as needed
}
?>
