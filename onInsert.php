<?php
   include './head.php';
   echo HeaderData('insert student','<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >');
?>
 
  
     <h1>Insert </h1>
     
       <?php 
          require 'form.php';

          echo create_drop_down("dhaka","M","K");
         

         
       ?>


    
 
  <?php
   include './footer.php';
   echo footer();
?>
</body>
</html>