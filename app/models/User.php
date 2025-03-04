
<!-- 
 User Attribute:
- id
- name
- email
- password
- role 
-->

<?php
class User {
    private $conn;
    private $table = 'users';
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT id, name, role, password FROM {$this->table} WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // TODO: HASH PASSWORD
        if ($user && $password == $user['password']) {
            return true;
        } else if ($user) {
            return "Wrong Password";
        } else {
            return "User doesn't exists";
        }

        return false;
    }

    public function register($name, $email, $password, $created_at) {
        $stmt = $this->conn->prepare("SELECT id, name, role, password FROM {$this->table} WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return "Email is taken";
        } else {
            // Put new user into DB
            $stmt = $this->conn->prepare("INSERT INTO {$this->table} (name, email, password, created_at) VALUES (?, ?, ?, ?)");
            
            // TODO: HASH PASSWORD
            if ($stmt->execute([$name, $email, $password, $created_at])) {
                return true;
            }
        }

        return false;
    }
}