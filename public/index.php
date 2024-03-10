<?php

    session_start();
    include '../vendor/autoload.php';
    use App\ERP\Controller\UserAuthController;

    $controller = new UserAuthController();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $controller->login($username, $password);
    }

    /*
        Switch Case for redirecting after login
        and general redirecting.
    */