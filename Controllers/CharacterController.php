<?php
    namespace Controllers;

    use Models\Character as Character;

    class CharacterController
    {
        private $characterDAO;

        public function __construct()
        {
            
        }

        public function ShowCharacterSheetView()
        {
            require_once(VIEWS_PATH."character-sheet.php");
        }

        public function ShowListView()
        {
            $characterList = $this->characterDAO->GetAll();

            require_once(VIEWS_PATH."character-list.php");
        }

        public function Add($recordId, $firstName, $lastName)
        {
            $character = new Character();
            $character->setRecordId($recordId);
            $character->setfirstName($firstName);
            $character->setLastName($lastName);

            $this->characterDAO->Add($character);

            $this->ShowAddView();
        }
    }
?>