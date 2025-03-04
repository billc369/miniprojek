<!-- Calculate current Savings and Show User Transaction History -->


<?php
class SavingController {
    public function save() {
        require_once 'app/views/save.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'];
            $amount = $_POST['amount'];
            $message = $_POST['message'];
            $created_at = date("Y-m-d h:i:sa");

            echo $name . $amount . $message . $created_at;
            echo "<br>Very Nice";
        }
    }
}
