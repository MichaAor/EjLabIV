<?php 
 include('header.php');
 include('nav-bar.php');
?>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('../images/demo/backgrounds/1.png');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Add</a></li>
        <li><a href="#">List - Remove</a></li>
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
      <form action="" method="">
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
            <tr>
                <td>Value</td>
                <td>Value</td>
                <td>Value</td>
                <td>Value</td>
                <td>
                  <button type="submit" class="btn" value=""> Remove </button>
                </td>
              </tr>
              <tr>
                <td>Value</td>
                <td>Value</td>
                <td>Value</td>
                <td>Value</td>
                <td>
                  <button type="submit" class="btn" value=""> Remove </button>
                </td>
              </tr>
              <tr>
                <td>Value</td>
                <td>Value</td>
                <td>Value</td>
                <td>Value</td>
                <td>
                  <button type="submit" class="btn" value=""> Remove </button>
                </td>
              </tr>
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