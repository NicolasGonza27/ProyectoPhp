<?php
    namespace Controllers;

    use Models\Weapon as Weapon;
    use DAO\WeaponDAO as WeaponDAO;

    class WeaponController
    {
        private $weaponDAO;

        public function __construct()
        {
            $this->weaponDAO = new WeaponDAO();
        }

        public function ShowWeaponsView()
        {
            require_once(VIEWS_PATH."character-sheet.php");
        }

        public function ShowListView()
        {
            $characterList = $this->characterDAO->GetAll();

            require_once(VIEWS_PATH."character-list.php");
        }

        public function ShowWeaponAddView()
        {
            require_once(VIEWS_PATH."weapons-add.php");
        }

        public function Add($properties)
        {
            $weapon = new Weapon();
            if (!is_array($properties)) {
                return;
                var_dump("error -> no es un array");
            }

            $weapon->setName($properties['name']);
            $weapon->setClass($properties['class']);
            $weapon->setPrecision($properties['precision']);
            
            $this->weaponDAO->Add($weapon);

            //$this->ShowAddView();
        }
    }
?>