<!-- Authenticate User Login and Registration -->

<?php
class AuthController {
    public function login() {
        require_once 'app/views/login.php';
    }

    public function register() {
        require_once 'app/views/register.php';
    }

    public function logout() {
        require_once 'app/views/logout.php';
    }

    public function admin() {
        require_once 'app/views/admin.php';
    }
}