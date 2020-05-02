<?php

    class Message extends DataBaseConnection
    {
        //Properties
        private $id;
        private $name;
        private $email;
        private $phone;
        private $message;

        //id
        public function getId() { return $this->id; }

        protected function setId($id) { $this->id = $id; }

        //name
        public function getName() { return $this->name; }

        protected function setName($name) { $this->name = $name; }

        //email
        public function getEmail() { return $this->email; }

        protected function setEmail($email) { $this->email = $email; }

        //phone
        public function getPhone() { return $this->phone; }

        protected function setPhone($phone) { $this->phone = $phone; }

        //message
        public function getMessage() { return $this->message; }

        protected function setMessage($message) { $this->message = $message; }
        
        //Mehtods
        public function __construct($id, $name, $email, $phone, $message)
        {
            $this->setId($id);
            $this->setName($name);
            $this->setEmail($email);
            $this->setPhone($phone);
            $this->setMessage($message);
        }

        protected function create($message)
        {
            $sql = "INSERT INTO contact (Name, Email, Phone, Message) VALUES(?, ?, ?, ?)";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$message->getName(), $message->getEmail(), $message->getPhone(), $message->getMessage()]);
        }




    }

?>