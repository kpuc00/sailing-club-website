<?php

    class regattaView extends RegattasController 
    {
        public function __construct()
        {
            
        }

        public function viewRegattaIdName() 
        {
            $result = $this->getRegattaIdName();

            foreach($result as $r) {
                echo '<a href="regatta.php?regattaId='. $r["raceID"].'"> <i class="fo fa-ship>"></i>'. $r["RaceName"] .'</a>';
            }
        }

        public function viewRegattaCompetitorsByRegattaId($id)
        {
            $competitors = $this->getRegattaCompetitorsByRegattaId($id);
            
            $index = 1;
            foreach($competitors as $competitor) {
                echo '<tr>';
                    echo '<td>'. $index . '</td>';
                    echo '<td>'. $competitor->getFirstName() .'</td>';
                    echo '<td>'. $competitor->getLastName() .'</td>';
                    echo '<td>'. $competitor->getAge() .'</td>';
                    echo '<td>'. $competitor->getClub() .'</td>';
                echo '</tr>';
                $index++;
            }
        }

        
    }

?>