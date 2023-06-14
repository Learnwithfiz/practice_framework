<?php
   include './head.php';
   echo HeaderData('insert student');
?>
<body>
<table border="1">
  <th>id</th>
  <th>name</th>
  <th>email</th>
  <th>dept</th>

  <tbody>
      <?php  
        include './common.php';
         echo Select('select * from student');
      ?>
  </tbody>
</table>
  

</body>
</html>