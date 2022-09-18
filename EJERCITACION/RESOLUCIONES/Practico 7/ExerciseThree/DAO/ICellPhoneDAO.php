<?php
    namespace DAO;

    use Models\CellPhone as CellPhone;

    interface ICellPhoneDao
    {
        function Add(CellPhone $cellPhone);
        function GetAll();
        function Remove($id);
    }
?>