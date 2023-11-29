<?php
class OfficerController {
    private $officerModel;

    public function __construct($officerModel) {
        $this->officerModel = $officerModel;
    }

    public function index() {
        $officers = $this->officerModel->getAllOfficers();
        include 'app/views/officer/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $postId = $_POST['post_id'];
            $status = $_POST['status'];
            $workStartTime = $_POST['work_start_time'];
            $workEndTime = $_POST['work_end_time'];

            $this->officerModel->createOfficer($name, $postId, $status, $workStartTime, $workEndTime);
            header("Location: index.php?entity=officer&action=index");
            exit();
        }

        include 'app/views/officer/create.php';
    }

}
