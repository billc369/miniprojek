
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

    public function isAdmin($email, $password) {
        
        return false;
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT id, name, role, password FROM {$this->table} WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $password == $user['password']) {
            return true;
        }
        
        return false;
    }
}