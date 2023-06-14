<?php
   include './head.php';
   echo HeaderData('select','<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >');
?>
<body>
<table class="table" border="1">
  <a href="oninsert.php">insert data</a>
  <th>id</th>
  <th>name</th>
  <th>email</th>
  <th>dept</th>

  <tbody >
      <?php  
        include './common.php';
         echo Select('select * from student');
      ?>
  </tbody>
</table>
  
<?php 
   include './footer.php';
   echo footer();
?>
</body>
</html>