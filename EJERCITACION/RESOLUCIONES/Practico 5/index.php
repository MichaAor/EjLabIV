<?php
 include('header.php'); 
  ?>

     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Title</h2>
               </header>
               <form action="process/logueo.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">User Name</label>
                         <input type="text" name="userName" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="">Password</label>
                         <input type="text" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
               </form>

               <br>
               <div class="content" align="center">
                    <a href="ExerciseOne/action.php" class="btn btn-danger" > Ver Ejercicio 1 - Autoload</a>
               </div>
          </div>
          
     </main>

<?php
 include('footer.php') 
?>
