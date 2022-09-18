<?php
    namespace DAO;

    use DAO\ICellPhoneDAO as ICellPhoneDAO;
    use DAO\Connection as Connection;
    use Models\CellPhone as CellPhone;

    class CellPhoneDAO implements ICellPhoneDAO
    {
        private $connection;
        private $tableName = "cellPhones";
        
        public function Add(CellPhone $cellPhone)
        {
            $query = "INSERT INTO ".$this->tableName." (code, brand, model, price) VALUES (:code, :brand, :model, :price)";

            $parameters["code"] =  $cellPhone->getCode();
            $parameters["brand"] = $cellPhone->getBrand();
            $parameters["model"] = $cellPhone->getModel();
            $parameters["price"] = $cellPhone->getPrice();          

            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters);
        }

        public function GetAll()
        {
            $cellPhoneList = array();

            $query = "SELECT id, code, brand, model, price FROM ".$this->tableName;

            $this->connection = Connection::GetInstance();

            $result = $this->connection->Execute($query);

            foreach($result as $row)
            {
                $cellPhone = new CellPHone();
                $cellPhone->setId($row["id"]);
                $cellPhone->setCode($row["code"]);
                $cellPhone->setBrand($row["brand"]);
                $cellPhone->setModel($row["model"]);
                $cellPhone->setPrice($row["price"]);

                array_push($cellPhoneList, $cellPhone);
            }

            return $cellPhoneList;
        }

        public function Remove($id)
        {            
            $query = "DELETE FROM ".$this->tableName." WHERE (id = :id)";

            $parameters["id"] =  $id;

            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters);
        }        
    }
?>