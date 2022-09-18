<?php
    namespace Process;

    require('..\Config\Autoload.php');

    use Config\Autoload as Autoload;

    use Model\Bill as Bill;
    use Model\Item as Item;
    use Repository\BillRepository as BillRepository;

    Autoload::Start();

    if($_GET){

        if(isset($_GET["billNumber"]) && isset($_GET["billDate"])){

            if($_GET["billDate"] <= date("Y-m-j")){

                $newBill = new Bill();
                $newBill->setBillDate($_GET["billDate"]);
                $newBill->setBillType($_GET["billType"]);
                $newBill->setBillNumber($_GET["billNumber"]);
    
                //Check bill existence in Repository
                $billRepository = new BillRepository();
                $exist = $billRepository->GetBill($newBill->getBillType(), $newBill->getBillNumber());

                if($exist == null){
                    $billRepository->Add($newBill);

                    session_start();
                    //Save billType and billNumber variable to a SESSION variable to move between forms
                    $_SESSION['from'] = $newBill->getBillType() ."-".  $newBill->getBillNumber();

                    echo "<script> alert('La factura se genero correctamente, ingrese los detalles !');";  
                    echo "window.location = '../bill-content.php'; </script>";
                }
                else{
                    echo "<script> alert('La factura que intenta generar ya se encuentra cargada !');";  
                    echo "window.location = '../add-bill.php'; </script>";
                }
            }
            else{
                echo "<script> if(confirm('Fecha incorrecta, la fecha no puede ser futura !'));";  
                echo "window.location = '../add-bill.php'; </script>";
            }
        }
        else{
            echo "<script> if(confirm('Olvido completar alguno de los datos, vuelva a intentarlo !'));";  
            echo "window.location = '../add-bill.php'; </script>";
        }
        
    }
    else{
        echo "<script> if(confirm('No es posible procesar informacion, esta tratando de ingresar incorrectamente!'));";  
        echo "window.location = '../add-bill.php'; </script>";
    }
?>