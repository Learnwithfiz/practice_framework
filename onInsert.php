<?php
   include './head.php';
   echo HeaderData('insert student');
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