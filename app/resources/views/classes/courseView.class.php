<?php

    class courseView extends CoursesController
    {

        public function __construct()
        {
            
        }

        public function viewCourses()
        {
            $result = $this->getCourses();

            foreach($result as $course) {
                include 'app/resources/views/layout/infobox.php';
            }
        }

        public function viewCourse($id)
        {
            return $this->getCourse($id);
        }

        public function viewCourseIdName() 
        {
            $result = $this->getCourseIdName();

            foreach($result as $r) {
                echo '<a href="class.php?courseId='. $r["classID"].'"> <i class="fo fa-ship>"></i>'. $r["ClassName"] .'</a>';
            }
        }

    }

?>