<?php

class WorkDaysController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function create() {
        // Handle the creation of a new workday
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'OfficerId' => $_POST['OfficerId'],
                'DayOfWeek' => $_POST['DayOfWeek'],
            ];

            $this->model->createWorkDay($data);
            // Redirect or show success message
        }

        // Load the view for creating a new workday
    }

    public function update($officerId) {
        // Handle updating an existing workday
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'DayOfWeek' => $_POST['DayOfWeek'],
            ];

            $this->model->updateWorkDay($officerId, $data);
            // Redirect or show success message
        }

        // Load the view for updating a workday
    }

    public function delete($officerId) {
        // Handle deleting workdays associated with an officer
        $this->model->deleteWorkDay($officerId);
        // Redirect or show success message
    }
    
    // Add other methods for CRUD operations as needed
}
?>
