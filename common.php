<?php

function Select($query){
   require './db.php';
    $sel = $query;
    $ex = mysqli_query($con,$sel);
    while($row=mysqli_fetch_array($ex)){?>
         <tr>
            <td><?php  echo $row['id'] ?></td>
            <td><?php  echo $row['name'] ?></td>
            <td><?php  echo $row['email'] ?></td>
            <td><?php  echo $row['dept'] ?></td>
            <td><button onclick="OnDelete(<?php  echo $row['id'] ?>)">delete</button></td>
         </tr>
   <?php }
}


?>
