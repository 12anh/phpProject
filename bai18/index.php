<?php require './lib/template.php'; ?>
     <?php  
          $mod = !empty($_GET['mod']) ? $_GET['mod']:'home.php' ;
          $act = !empty($_GET['act']) ? $_GET['act']:'main.php'; 
         
          $path= "./modules/{$mod}/{$act}.php"; 
     ?>
          <div id="content">
          <?php  
          if(file_exists($path))
          require "$path" ;
          else require './inc/404.php';

          ?>
          </div>

 <?php require './inc/footer.php'; ?>       