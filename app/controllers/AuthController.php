<!-- Authenticate User Login and Registration -->

<?php
class AuthController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        require_once 'app/models/User.php';
        $this->userModel = new User($this->db);

        require_once 'app/models/Saving.php';
        $this->savingModel = new Saving($this->db);
    }

    public function login() {
        require_once 'app/views/login.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // if (password is correct)
            $result = $this->userModel->login($email, $password);
            if ($result === true){
                // Create Session
                header("Location: index.php?url=home");
                exit;
            } 
            else {
                // Wrong Password or Username doesn't exists
                echo $result;
            }
        }
    }

    public function register() {
        require_once 'app/views/register.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $created_at = date("Y-m-d h:i:sa");

            $result = $this->userModel->register($name, $email, $password, $created_at);
            if ($result === true){
                // Create Session
                header("Location: index.php?url=home");
                exit;
            } 
            else {
                // Wrong Password or Username doesn't exists
                echo $result;
            }
        }
    }

    public function logout() {
        require_once 'app/views/logout.php';
        header("Location: index.php?url=login");
        exit;
    }
}