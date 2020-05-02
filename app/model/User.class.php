<?php

    class User extends DataBaseConnection 
    {
        //Properties 
        protected $id;
        protected $username;
        protected $email;
        protected $displayName;
        protected $profilePicture;
        protected $userType;
        protected $registerDate;
        protected $lastLogin;
        protected $password;

        //id
        public function getId() { return $this->id; }

        protected function setId($id) { $this->id = $id; }

        //username
        public function getUsername() { return $this->username; }

        protected function setUsername($username) { $this->username = $username; }

        //email
        public function getEmail() { return $this->email; }

        protected function setEmail($email) { $this->email = $email; }

        //displayName
        public function getDisplayName() { return $this->displayName; }

        protected function setDisplayName($displayName) { $this->displayName = $displayName; }

        //profilePicture
        public function getProfilePicture() { return $this->profilePicture; }

        protected function setProfilePicture($profilePicture) { $this->profilePicture = $profilePicture; }

        //userType
        public function getUserType() { return $this->userType; }

        protected function setUserType($userType) { $this->userType = $userType; }

        //registerDate
        public function getRegisterDate() { return $this->registerDate; }

        protected function setRegisterDate($registerDate) { $this->registerDate = $registerDate; }

        //lastLogin
        public function getLastLogin() { return $this->lastLogin; }

        protected function setLastLogin($lastLogin) { $this->lastLogin = $lastLogin; }

        //password
        public function getPassword() { return $this->password; }

        protected function setPassword($password) { $this->password = $password; }

        //Methods
        public function __construct($id, $username, $displayName, $email, $userType, $profilePicture, $password) 
        {
            $this->setId($id);
            $this->setUsername($username);
            $this->setUsername($username);
            $this->setDisplayName($displayName);
            $this->setEmail($email);
            $this->setUserType($userType);
            $this->setProfilePicture($profilePicture);
            $this->setPassword($password);

        }

        protected function login($username,$password) 
        {
            //code
        }

        protected function register($user) 
        {
            //code
        }

        protected function logout()
        {
            //code
        }

        public function getAll() 
        {

        }

        public function getUser()
        {

        }





    }

?>