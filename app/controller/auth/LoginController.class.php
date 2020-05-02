<?php

    class LoginController extends User 
    {
        public function __construct()
        {
            
        }

        public function login($username, $password) 
        {
            parent::login($username, $password);
        }
    }
?>