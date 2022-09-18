<?php
    namespace Repository;

    use Model\Person as Person;
    use Model\Client as Client;

    interface IUserRepository
    {
        function Add(Client $newUser);
        function GetAll();
        function GetByUserName($userName);
    }
?>