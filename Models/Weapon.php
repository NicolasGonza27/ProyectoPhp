<?php
    namespace Models;

    class Weapon
    {
        private $name;
        private $class;
        private $precision;
        private $encumbrance;
        private $availability;
        private $damage;
        private $ammo;
        private $clip_size;
        private $fire_rate;
        private $reliability;

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of class
         */ 
        public function getClass()
        {
                return $this->class;
        }

        /**
         * Set the value of class
         *
         * @return  self
         */ 
        public function setClass($class)
        {
                $this->class = $class;

                return $this;
        }

        /**
         * Get the value of precision
         */ 
        public function getPrecision()
        {
                return $this->precision;
        }

        /**
         * Set the value of precision
         *
         * @return  self
         */ 
        public function setPrecision($precision)
        {
                $this->precision = $precision;

                return $this;
        }

        /**
         * Get the value of encumbrance
         */ 
        public function getEncumbrance()
        {
                return $this->encumbrance;
        }

        /**
         * Set the value of encumbrance
         *
         * @return  self
         */ 
        public function setEncumbrance($encumbrance)
        {
                $this->encumbrance = $encumbrance;

                return $this;
        }

        /**
         * Get the value of availability
         */ 
        public function getAvailability()
        {
                return $this->availability;
        }

        /**
         * Set the value of availability
         *
         * @return  self
         */ 
        public function setAvailability($availability)
        {
                $this->availability = $availability;

                return $this;
        }

        /**
         * Get the value of damage
         */ 
        public function getDamage()
        {
                return $this->damage;
        }

        /**
         * Set the value of damage
         *
         * @return  self
         */ 
        public function setDamage($damage)
        {
                $this->damage = $damage;

                return $this;
        }

        /**
         * Get the value of ammo
         */ 
        public function getAmmo()
        {
                return $this->ammo;
        }

        /**
         * Set the value of ammo
         *
         * @return  self
         */ 
        public function setAmmo($ammo)
        {
                $this->ammo = $ammo;

                return $this;
        }

        /**
         * Get the value of clip_size
         */ 
        public function getClip_size()
        {
                return $this->clip_size;
        }

        /**
         * Set the value of clip_size
         *
         * @return  self
         */ 
        public function setClip_size($clip_size)
        {
                $this->clip_size = $clip_size;

                return $this;
        }

        /**
         * Get the value of fire_rate
         */ 
        public function getFire_rate()
        {
                return $this->fire_rate;
        }

        /**
         * Set the value of fire_rate
         *
         * @return  self
         */ 
        public function setFire_rate($fire_rate)
        {
                $this->fire_rate = $fire_rate;

                return $this;
        }

        /**
         * Get the value of reliability
         */ 
        public function getReliability()
        {
                return $this->reliability;
        }

        /**
         * Set the value of reliability
         *
         * @return  self
         */ 
        public function setReliability($reliability)
        {
                $this->reliability = $reliability;

                return $this;
        }
    }
?>