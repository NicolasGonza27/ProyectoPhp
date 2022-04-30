<?php
    namespace Models;

    class Character
    {
        private $id;

        public function __construct() {
            $this->$id = rand(10000000,99999999);
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }
?>

