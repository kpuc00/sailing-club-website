<?php 

    class Regatta extends DataBaseConnection 
    {
        //Properties
        private $id;
        private $Name;

        //id
        public function getId() { return $this->id; }

        protected function setId($id) { $this->id = $id; } 

        //regattaName
        public function getName() { return $this->regattaName; }

        protected function setName($regattaName) { $this->regattaName = $regattaName; }

        public function __construct()
        {

        }

        protected function getAll()
        {

        }

        protected function getRegatta()
        {

        }

        protected function getRegattaCompetitorsByRegattaId($id)
        {
            $sql = "SELECT * FROM competitors WHERE raceID = ?";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            return $stmt->fetchAll();
        } 

        protected function getIdName() 
        {
            $sql = "SELECT raceID, RaceName FROM races;";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }

    }

?>