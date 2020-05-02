<?php 

    class ContactFormController extends Message
    {
        public function __construct()
        {
            
        } 

        public function insertMessage($message)
        {
            $this->create($message);
        }
    }

?>