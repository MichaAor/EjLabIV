<?php
include('header.php');
include('nav.php');

use Config\Autoload as Autoload;

use Model\Bill as Bill;
use Model\Item as Item;
use Repository\BillRepository as BillRepository;

Autoload::Start();

$billRepository = new BillRepository();     
$billList = $billRepository->GetAll();

?>
<main class="py-5">
     
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Facturas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Fecha</th>
                         <th>Tipo</th>
                         <th>Numero</th>
                         <th>Importe</th>
                    </thead>
                    <tbody>
                         <form action="Process/removeBill.php" method="POST" >
                         <?php 
                              $totalAmount = 0.0;
                              if(isset($billList) && !empty($billList)){
                                   
                                   foreach($billList as $bill){
                                   ?>
                                        <tr> 
                                             <td><?php echo $bill->getBillDate(); ?></td>
                                             <td><?php echo "Factura ".$bill->getBillType(); ?></td>
                                             <td><?php echo $bill->getBillNumber(); ?></td>
                                             <td><?php echo $bill->totalCost(); ?></td>
                                             <td>
                                                  <button type="submit" name="btnRemove" class="btn btn-danger" value="<?php echo $bill->getBillType().'-'.$bill->getBillNumber(); ?>"> Eliminar </button>
                                             </td>
                                        </tr>
                                   <?php
                                   $totalAmount += $bill->totalCost();
                                   }
                              }
                         ?>
                         </form>
                    </tbody>
               </table>
          </div>
     </section>

     <div class="container">
          <div class="bg-light-alpha p-1">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="form-group text-white">
                              <label for="" class="ml-1"><b>IMPORTE TOTAL FACTURADO</b></label>
                              <input type="text" value="<?php echo $totalAmount; ?>" class="form-control ml-1 text-strong" disabled>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</main>

<?php include('footer.php') ?>
