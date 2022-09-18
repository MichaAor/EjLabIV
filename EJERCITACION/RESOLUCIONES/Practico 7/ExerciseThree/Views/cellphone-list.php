<?php 
 include('header.php');
 include('nav-bar.php');
 require_once("validate-session.php");
?>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('../images/demo/backgrounds/1.png');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="<?php echo  FRONT_ROOT."CellPhone/ShowAddView "?>">Home</a></li>
        <li><a href="<?php echo  FRONT_ROOT."CellPhone/ShowAddView "?>">Add</a></li>
        <li><a href="<?php echo  FRONT_ROOT."CellPhone/ShowListView "?>">List - Remove</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <div class="scrollable">
      <form action="<?php echo FRONT_ROOT."CellPhone/Remove" ?>" method="">
        <table style="text-align:center;">
          <thead>
            <tr>
              <th style="width: 15%;">Code</th>
              <th style="width: 30%;">Brand</th>
              <th style="width: 30%;">Model</th>
              <th style="width: 15%;">Price</th>
              <th style="width: 10%;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($cellPhoneList as $cellPhone)
              {
                ?>
                  <tr>
                    <td><?php echo $cellPhone->getCode() ?></td>
                    <td><?php echo $cellPhone->getBrand() ?></td>
                    <td><?php echo $cellPhone->getModel() ?></td>
                    <td><?php echo $cellPhone->getPrice() ?></td>
                    <td>
                      <button type="submit" name="id" class="btn" value="<?php echo $cellPhone->getId() ?>"> Remove </button>
                    </td>
                  </tr>
                <?php
              }
            ?>                          
          </tbody>
        </table></form> 
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php 
  include('footer.php');
?>