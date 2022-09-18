<?php
namespace Controller;
date_default_timezone_set("AMERICA/BUENOS_AIRES");

    if($_GET){
        $date = $_GET['date'];
        if(comproDate($date)){        
                header("location:../bill-content.php");
            }else{
                echo "<script>alert('Fecha no valida, Reintente');";
                echo "window.location = '../add-bill.php';</script>";
            }
        }else{
            echo "<script>alert('Tipo y numero requeridos');";
            echo "window.location = '../add-bill.php';</script>";
    }

    function comproDate($date){
        $now = date("Y-m-d" ,time());
        if($date <= $now){
            return true;
        }
    }

?>