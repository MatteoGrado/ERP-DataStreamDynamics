<?php

    namespace App\ERP\src\Entity;

    interface UserAuth {
        public function Controller();
        public function register($username, $password);
        public function login($username, $password);
    }