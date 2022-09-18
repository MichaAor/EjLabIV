<?php
    namespace DAO;

    use DAO\IUserDAO as IUserDAO;
    use DAO\Connection as Connection;
    use Models\User as User;

    class UserDAO implements IUserDAO
    {
        private $connection;
        private $tableName = "users";        

        public function GetByUserName($userName)
        {
            $user = null;

            $query = "SELECT userName, password FROM ".$this->tableName." WHERE (userName = :userName)";

            $parameters["userName"] = $userName;

            $this->connection = Connection::GetInstance();

            $results = $this->connection->Execute($query, $parameters);

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