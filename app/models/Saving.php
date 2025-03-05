<!-- 
Savings Transaction Attribute:
- id
- user_id
- amount
- message
- created_at 
-->

<?php
class Saving {
    private $conn;
    private $table = 'savings';
    
    public function __construct($db) {
        $this->conn = $db;
    }

    // untuk menyimpan saving user
    public function save($user_id, $amount, $message, $created_at) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (user_id, amount, message, created_at) VALUES (?, ?, ?, ?)");

        if ($stmt->execute([$user_id, $amount, $message, $created_at])) {
            return true;
        }

        return false;
    }

    //retrieve saving user yg sdg log in 
    public function retrieve() {
        $stmt = $this->conn->prepare("
            SELECT s.id, u.name AS name, s.amount, s.message, s.created_at
            FROM {$this->table} s
            INNER JOIN users u ON s.user_id = u.id
            WHERE s.user_id = ?
        ");

        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records
    }

    //retrieve saving semua user
    public function retrieve_all() {
        $stmt = $this->conn->prepare("
            SELECT s.id, u.name AS name, s.amount, s.message, s.created_at
            FROM {$this->table} s
            INNER JOIN users u ON s.user_id = u.id
        ");

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records
    }
}