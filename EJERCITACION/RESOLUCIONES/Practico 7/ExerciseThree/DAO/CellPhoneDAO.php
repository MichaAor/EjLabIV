<?php
    namespace DAO;

    use DAO\ICellPhoneDAO as ICellPhoneDAO;
    use DAO\Connection as Connection;
    use DAO\QueryType as QueryType;
    use Models\CellPhone as CellPhone;

    class CellPhoneDAO implements ICellPhoneDAO
    {
        private $connection;
        private $tableName = "cellPhones";
        
        public function Add(CellPhone $cellPhone)
        {
            $query = "CALL CellPhones_Add(?, ?, ?, ?)";

            $parameters["code"] =  $cellPhone->getCode();
            $parameters["brand"] = $cellPhone->getBrand();
            $parameters["model"] = $cellPhone->getModel();
            $parameters["price"] = $cellPhone->getPrice();

            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters, QueryType::StoredProcedure);
        }

        public function GetAll()
        {
            $cellPhoneList = array();

            $query = "CALL CellPhones_GetAll()";

            $this->connection = Connection::GetInstance();

            $result = $this->connection->Execute($query, array(), QueryType::StoredProcedure);

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
            $query = "CALL CellPhones_Delete(?)";

            $parameters["id"] =  $id;

            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters, QueryType::StoredProcedure);
        }        
    }
?>