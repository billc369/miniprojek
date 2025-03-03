<?php
class Router {
    public function route($url) {
        switch($url) {
            case 'home':
                echo "Home";
                break;

            case 'login':
                echo "Login";
                break;

            default:
                echo "Page not found";
                break;
        }
    }
}
