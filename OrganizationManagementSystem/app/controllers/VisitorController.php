<?php
class VisitorController {
    private $visitorModel;

    public function __construct($visitorModel) {
        $this->visitorModel = $visitorModel;
    }

    public function index() {
        $visitors = $this->visitorModel->getAllVisitors();
        include 'app/views/visitor/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $mobileNo = $_POST['mobile_no'];
            $email = $_POST['email'];
            $status = $_POST['status'];

            $this->visitorModel->createVisitor($name, $mobileNo, $email, $status);
            header("Location: index.php?entity=visitor&action=index");
            exit();
        }

        include 'app/views/visitor/create.php';
    }

}