<?php

    class coachView extends CoachesController
    {
        public function __construct()
        {
            
        }

        public function viewCoachByCourseId($id) 
        {
            return $this->getCoachByCourseId($id);
        }
    }

?>