<!-- Calculate current Savings and Show User Transaction History -->


<?php
class SavingController {
    private $db;
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        require_once 'app/models/User.php';
        $this->userModel = new User($this->db);

        require_once 'app/models/Saving.php';
        $this->savingModel = new Saving($this->db);
    }

    public function save() {
        require_once 'app/views/save.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'];
            $amount = $_POST['amount'];
            $message = $_POST['message'];
            $created_at = date("Y-m-d h:i:sa");

            $result = $this->savingModel->save($user_id, $amount, $message, $created_at);
            if ($result === true){
                header("Location: index.php?url=home");
                exit;
            } 
            else {
                // Error
                echo "FAILED";
                // echo $result;
            }
        }
    }
}
