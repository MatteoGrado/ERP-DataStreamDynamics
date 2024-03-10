<?php

    namespace App\ERP\Controller;

    use App\ERP\Models\DB;

    class UserAuthController {
        /* public function () {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "erp");
            if (isset($_POST['submit'])) {
                session_start();
                if ($this->login($_POST['username'], $_POST['password'])) {
                    //session set user_id for remember-me
                } else {
                    echo "Failed to Login!";
                }
            }
        }
        */
        public function register($username, $password) {
            $db = new DB("localhost", "admin", "Sumafelo03!", "erp");
            $isql = "INSERT INTO `users` (`user_id`, 'firstname', 'lastname', 'username', `password`, 'email')
                    VALUES (NULL, :username, :password)";
            $stmt = $db->con->prepare($isql);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([':username' => $username, ':password' => $password]);
        }
        public function login($username, $password) {
            $db = new DB("localhost", "admin", "Sumafelo03!", "erp");
            $ssql = "SELECT `username`, `password` FROM `users` WHERE `username` = :username";
            $stmt = $db->con->prepare($ssql);
            $stmt->execute([':username' => $username]);
            $userDataDB = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(!$userDataDB) {
                die("Falscher Benutzername!");
            }
            if(!empty($userDataDB) && password_verify($password, $userDataDB['password'])) {
                die("Passwort falsch!");
            }
            echo "Success!";
            header("Location: index.php");
        }
    }