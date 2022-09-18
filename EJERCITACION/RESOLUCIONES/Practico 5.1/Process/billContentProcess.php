<?php
 namespace Process;

 use Config\Autoload as Autoload;

 use Model\Bill as Bill;
 use Model\Item as Item;
 use Repository\BillRepository as BillRepository;

Autoload::Start();

//Get specific SESSION variable for retrieve complete bill Data
if (isset($_SESSION['from'])){
    $from = explode('-', $_SESSION['from']);

    $billType = $from[0];
    $billNumber = $from[1];

    $billRepository = new BillRepository();
    
    $newBill = $billRepository->GetBill($billType, $billNumber);

    if(!isset($newBill)){
         echo "<script> alert('Hubo inconveniente al procesar la Factura, vuelva a intentarlo!'));";  
         echo "window.location = '../add-bill.php'; </script>";
    }

    if($_POST){
         if(isset($_POST["code"]) && isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["quantity"])){
            $code = $_POST["code"];
            $name = $_POST["name"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $description = isset($_POST["description"]) ? $_POST["description"] : "";
    
            $newItem = new Item();
            $newItem->setCode($code);
            $newItem->setName($name);
            $newItem->setDescription($description);
            $newItem->setPrice($price);
            $newItem->setQuantity($quantity);
    
            $newBill = $billRepository->AddItem($newBill, $newItem);
         }
    }
}


?>