<?php
    namespace DAO;

    use DAO\IUserDAO as IUserDAO;
    use DAO\Connection as Connection;
    use DAO\QueryType as QueryType;
    use Models\User as User;

    class UserDAO implements IUserDAO
    {
        private $connection;
        private $tableName = "users";        

        public function GetByUserName($userName)
        {
            $user = null;

            $query = "CALL Users_GetByUserName(?)";

            $parameters["userName"] = $userName;

            $this->connection = Connection::GetInstance();

            $results = $this->connection->Execute($query, $parameters, QueryType::StoredProcedure);

            foreach($results as $row)
            {
                $user = new User();
                $user->setUserName($row["userName"]);
                $user->setPassword($row["password"]);
            }

            return $user;
        }  
    }
?>