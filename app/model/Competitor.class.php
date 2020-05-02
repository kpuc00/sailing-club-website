<?php

    class Competitor extends DataBaseConnection 
    {
        //Properties
        private $id;
        private $firstName;
        private $lastName;
        private $age;
        private $club;
        private $raceId;

        //id
        public function getId() { return $this->id; }

        protected function setId($id) { $this->id = $id; }

        //firstName
        public function getFirstName() { return $this->firstName; }

        protected function setFirstName($firstName) { $this->firstName = $firstName; }

        //lastName
        public function getLastName() { return $this->lastName; }

        protected function setLastName($lastName) { $this->lastName = $lastName; }

        //age
        public function getAge() { return $this->age; }

        protected function setAge($age) { $this->age = $age; }

        //club
        public function getClub() { return $this->club; }

        protected function setClub($club) { $this->club = $club; }

        //raceId
        public function getRaceId() { return $this->raceId; }

        protected function setRaceId($raceId) { $this->raceId = $raceId; }

        //Methods
        public function __construct($id, $firstName, $lastName, $age, $club, $raceId)
        {
            $this->setId($id);
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setAge($age);
            $this->setClub($club);
            $this->setRaceId($raceId);
        }


    }

?>