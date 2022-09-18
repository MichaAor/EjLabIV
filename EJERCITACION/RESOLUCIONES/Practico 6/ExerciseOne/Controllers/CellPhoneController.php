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
            require_once(VIEWS_PATH."add-cellphone.php");
        }

        public function ShowListView()
        {
            $cellPhoneList = $this->cellPhoneDAO->getAll();
            
            require_once(VIEWS_PATH."cellphone-list.php");
        }

        public function Add($code, $brand, $model, $price)
        {
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
            $this->cellPhoneDAO->Remove($id);

            $this->ShowListView();
        }
    }
?>