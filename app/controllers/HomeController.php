<!-- Home Controller -->

<?php
class HomeController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();

        require_once 'app/models/Saving.php';
        $this->savingModel = new Saving($this->db);
    }

    public function index() {
        require_once 'app/models/User.php';
        $savingModel = new Saving($this->db);
        $result = $this->savingModel->retrieve();
        require_once 'app/views/home.php';
    }

    public function admin() {
        // Is Admin
        
        require_once 'app/models/User.php';
        $savingModel = new Saving($this->db);
        $result = $this->savingModel->retrieve_all();
        require_once 'app/views/admin.php';
    }
}