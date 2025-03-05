<?php
class User {
    private $conn;
    private $table = 'users';
    
    public function __construct($db) {
        $this->conn = $db;
    }

    //untuk log in dan create session
    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT id, name, role, password FROM {$this->table} WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            return true;
        } else if ($user) {
            return "Wrong Password";
        } else {
            return "User doesn't exist";
        }

        return false;
    }

    //untuk regis user
    public function register($name, $email, $password, $created_at) {
        $stmt = $this->conn->prepare("SELECT id FROM {$this->table} WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return "Email is taken";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO {$this->table} (name, email, password, created_at) VALUES (?, ?, ?, ?)");
            
            if ($stmt->execute([$name, $email, $hashed_password, $created_at])) {
                return true;
            }
        }

        return false;
    }
}
?>
