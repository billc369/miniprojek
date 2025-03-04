<!-- Authenticate User Login and Registration -->

<?php
class AuthController {
    public function login() {
        require_once 'app/views/login.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // if get email is (role == admin) and (password is correct)
            if ($email == 'admin' && $password == 'adminpassword'){
                // Create Admin Session

            } 
            // if (password is correct)
            else if ($email == 'bill' && $password == 'password'){
                // Create Session
                echo "<br>Very Nice";

            } 
            // Wrong Password or Username doesn't exists
            else {
                
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