<?php
namespace Controller;

    if($_POST){
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        if($userName == 'Cosme Fulanito'){
            if($password == 'strongPassword'){        
                header("location:../add-bill.php");
        
            }else{
                echo "<script>alert('Contraseña Incorrecta');";
                echo "window.location = '../index.php';</script>";
            }
        
        }else{
            echo "<script>alert('Usuario Incorrecta');";
            echo "window.location = '../index.php';</script>";
        }
    }else{
        echo "<script>alert('Error en el envio de datos.');";
        echo "window.location = '../index.php';</script>";
    }

?>