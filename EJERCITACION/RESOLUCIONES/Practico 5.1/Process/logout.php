<?php
    session_start();
    
    session_destroy();

    echo "<script> alert('Adios, vuelva pronto !');";  
    echo "window.location = '../index.php'; </script>";
?>