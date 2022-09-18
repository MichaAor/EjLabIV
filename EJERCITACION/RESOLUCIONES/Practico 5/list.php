<?php
include('header.php');
include('nav.php');

use config\autoload as Autoload;

use model\Beer as Beer;
use repositories\BeerRepository as BeerRepository;

Autoload::Start();

$repo = new BeerRepository();
$arrayBeers= $repo->getAll();

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Cervezas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Code</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Type</th>
                        
                    </thead>
                    <tbody>
                         <form action="process/removeBeer.php" method="POST">
                         <?php
                              if(isset($arrayBeers)){
                                   foreach($arrayBeers as $beer){
                                   
                                        ?>
                                             <tr>
                                                  <td><?php echo $beer->getCode(); ?></td>
                                                  <td><?php echo $beer->getName(); ?></td>
                                                  <td><?php echo $beer->getDescription(); ?></td>
                                                  <td><?php echo $beer->getType(); ?></td>
                                                  <td> 
                                                       <button type="submit" name="btnRemove" class="btn btn-danger" value="<?php echo $beer->getCode(); ?>"> Eliminar </button>
                                                  </td>
                                             </tr>
                                        <?php
                                   }
                              }
                         ?>
                         </form>
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
