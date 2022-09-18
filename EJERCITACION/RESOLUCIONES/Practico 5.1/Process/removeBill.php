<?php
 namespace Process;

 require('..\Config\Autoload.php');

 use Config\Autoload as Autoload;

 use Model\Bill as Bill;
 use Model\Item as Item;
 use Repository\BillRepository as BillRepository;

Autoload::Start();

if($_POST){
     if(isset($_POST["btnRemove"])){
          $dataToRemove = explode('-', $_POST["btnRemove"]);

          $billType = $dataToRemove[0];
          $billNumber = $dataToRemove[1];
 
          $billRepository = new BillRepository();
          
          $billRepository->Remove($billType, $billNumber);


          echo "<script> alert('Se ha eliminado correctamente la Factura seleccionada!');";  
          echo "window.location = '../bill-list.php'; </script>";
     }
}
else{
     echo "<script> alert('Hubo inconveniente al procesar la Factura, vuelva a intentarlo!'));";  
     echo "window.location = '../bill-list.php'; </script>";
}

?>