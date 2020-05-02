<?php

    class CoachesController extends Coach
    {
        public function __construct()
        {
            
        }

        public function getCoachByCourseId($id) 
        {
            $result = parent::getCoachByCourseId($id);
            $coach = null;
            if ($result == null) {
                $coach = new Coach("Not Available", "Not Available", "Not Available", "Not Available", "Not Available", "Not Available");
            } else {
                $coach = new Coach($result[0]["coachID"], $result[0]["coachName"], $result[0]["coachLastName"], $result[0]["coachPicture"], $result[0]["coachDescription"], $result[0]["classID"]);
            }

            return $coach;
        }
    }

?>