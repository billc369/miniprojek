<!-- Authenticate User Login and Registration -->

<?php
class AuthController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        require_once 'app/models/User.php';
        $this->userModel = new User($this->db);
    }

    public function login() {
        require_once 'app/views/login.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // if get email is (role == admin) and (password is correct)
            // if ($this->userModel->isAdmin($email, $password)){
            //     // Create Admin Session

            // } 
            // if (password is correct)
            if ($this->userModel->login($email, $password)){
                // Create Session
                header("Location: index.php?url=home");
                exit;
            } 
            // Wrong Password or Username doesn't exists
            else {
                echo "Wrong";
                // if email exists:
                    // echo "Wrong Password";
                // else:
                    // echo "Email doesnt exists"
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

            echo $name . $email . $password . $created_at;
            echo "<br>Very Nice";
        }
    }

    public function logout() {
        require_once 'app/views/logout.php';
    }

    public function admin() {
        require_once 'app/views/admin.php';
    }
}