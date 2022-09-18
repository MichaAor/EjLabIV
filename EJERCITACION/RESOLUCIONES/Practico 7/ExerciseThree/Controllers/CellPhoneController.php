<?php
    namespace Controllers;

    use DAO\CellPhoneDAO as CellPhoneDAO;
    use Models\CellPhone as CellPhone;

    class CellPhoneController
    {
        private $cellPhoneDAO;

        public function __construct()
        {
            $this->cellPhoneDAO = new CellPhoneDAO();
        }

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."validate-session.php");
            require_once(VIEWS_PATH."add-cellphone.php");
        }

        public function ShowListView()
        {
            require_once(VIEWS_PATH."validate-session.php");
            $cellPhoneList = $this->cellPhoneDAO->getAll();
            
            require_once(VIEWS_PATH."cellphone-list.php");
        }

        public function Add($code, $brand, $model, $price)
        {
            require_once(VIEWS_PATH."validate-session.php");

            $cellPhone = new CellPhone();
            $cellPhone->setCode($code);
            $cellPhone->setBrand($brand);
            $cellPhone->setModel($model);
            $cellPhone->setPrice($price);

            $this->cellPhoneDAO->Add($cellPhone);

            $this->ShowAddView();
        }

        public function Remove($id)
        {
            require_once(VIEWS_PATH."validate-session.php");
            
            $this->cellPhoneDAO->Remove($id);

            $this->ShowListView();
        }
    }
?>