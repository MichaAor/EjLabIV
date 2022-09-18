<?php
    namespace DAO;

    use DAO\ICellPhoneDAO as ICellPhoneDAO;
    use Models\CellPhone as CellPhone;

    class CellPhoneDAO implements ICellPhoneDAO
    {
        private $cellPhoneList = array();
        private $fileName = ROOT."Data/cellPhones.json";

        public function Add(CellPhone $cellPhone)
        {
            $this->RetrieveData();
            
            $cellPhone->setId($this->GetNextId());
            
            array_push($this->cellPhoneList, $cellPhone);

            $this->SaveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->cellPhoneList;
        }

        public function Remove($id)
        {            
            $this->RetrieveData();
            
            $this->cellPhoneList = array_filter($this->cellPhoneList, function($cellPhone) use($id){                
                return $cellPhone->getId() != $id;
            });
            
            $this->SaveData();
        }

        private function RetrieveData()
        {
             $this->cellPhoneList = array();

             if(file_exists($this->fileName))
             {
                 $jsonToDecode = file_get_contents($this->fileName);

                 $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();
                 
                 foreach($contentArray as $content)
                 {
                     $cellPhone = new CellPhone();
                     $cellPhone->setId($content["id"]);
                     $cellPhone->setCode($content["code"]);
                     $cellPhone->setBrand($content["brand"]);
                     $cellPhone->setModel($content["model"]);
                     $cellPhone->setPrice($content["price"]);

                     array_push($this->cellPhoneList, $cellPhone);
                 }
             }
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->cellPhoneList as $cellPhone)
            {
                $valuesArray = array();
                $valuesArray["id"] = $cellPhone->getId();
                $valuesArray["code"] = $cellPhone->getCode();
                $valuesArray["brand"] = $cellPhone->getBrand();
                $valuesArray["model"] = $cellPhone->getModel();
                $valuesArray["price"] = $cellPhone->getPrice();
                array_push($arrayToEncode, $valuesArray);
            }

            $fileContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $fileContent);
        }

        private function GetNextId()
        {
            $id = 0;

            foreach($this->cellPhoneList as $cellPhone)
            {
                $id = ($cellPhone->getId() > $id) ? $cellPhone->getId() : $id;
            }

            return $id + 1;
        }
    }
?>