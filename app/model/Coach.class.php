<?php

    class Coach extends DataBaseConnection 
    {
        //Properties
        private $id;
        private $firstName;
        private $lastName;
        private $picture;
        private $description;
        private $courseId;

        //id
        public function getId() { return $this->id; }

        protected function setId($id) { $this->id = $id; }

        //firstName$firstName
        public function getFirstName() { return $this->firstName; }

        protected function setFirstName($firstName) { $this->firstName = $firstName; } 

        //lastName
        public function getLastName() { return $this->lastName; }

        protected function setLastName($lastName) { $this->lastName = $lastName; }

        //picture
        public function getPicture() { return $this->picture; }

        protected function setPicture($picture)  { $this->picture = $picture; }

        //description
        public function getDescription() { return $this->description; }

        protected function setDescription($description) { $this->description = $description; }

        //courseId
        public function getCourseId() { return $this->courseId; }

        protected function setCourseId($courseId) { $this->courseId = $courseId; }


        //Methods
        public function __construct($id, $firstName, $lastName, $picture, $description, $courseId) 
        {
            $this->setId($id);
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setPicture($picture);
            $this->setDescription($description);
            $this->setCourseId($courseId);
        }

        protected function getAll() 
        {

        }

        protected function getCoachByCourseId($id)
        {
            $sql = "SELECT * FROM coaches WHERE classID = ?";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            return $stmt->fetchAll();
        }


    }

?>