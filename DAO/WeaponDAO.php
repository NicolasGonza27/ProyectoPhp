<?php
    namespace DAO;

    use Models\Weapon as Weapon;

    class WeaponDAO
    {
        private $weaponList = array();

        public function Add(Weapon $weapon)
        {
            $this->RetrieveData();
            
            array_push($this->weaponList, $weapon);

            $this->SaveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->studentList;
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->weaponList as $weapon)
            {
                $valuesArray["name"] = $weapon->getName();
                $valuesArray["class"] = $weapon->getClass();
                $valuesArray["precision"] = $weapon->getPrecision();
                $valuesArray["encumbrance"] = $weapon->getEncumbrance();
                $valuesArray["availability"] = $weapon->getAvailability();
                $valuesArray["damage"] = $weapon->getDamage();
                $valuesArray["ammo"] = $weapon->getAmmo();
                $valuesArray["clip_size"] = $weapon->getClip_size();
                $valuesArray["fire_rate"] = $weapon->getFire_rate();
                $valuesArray["reliability"] = $weapon->getReliability();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents('Data/weapons.json', $jsonContent);
        }

        private function RetrieveData()
        {
            $this->weaponList = array();

            if(file_exists('Data/weapons.json'))
            {
                $jsonContent = file_get_contents('Data/weapons.json');

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                    $weapon = new Weapon();
                    $weapon->setName($valuesArray["name"]);
                    $weapon->setClass($valuesArray["class"]);
                    $weapon->setPrecision($valuesArray["precision"]);
                    $weapon->setAvailability($valuesArray["encumbrance"]);
                    $weapon->setEncumbrance($valuesArray["availability"]);
                    $weapon->setDamage($valuesArray["damage"]);
                    $weapon->setAmmo($valuesArray["ammo"]);
                    $weapon->setClip_size($valuesArray["clip_size"]);
                    $weapon->setFire_rate($valuesArray["fire_rate"]);
                    $weapon->setReliability($valuesArray["reliability"]);

                    array_push($this->weaponList, $weapon);
                }
            }
        }
    }
?>