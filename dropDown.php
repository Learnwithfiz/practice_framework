
    <?php
 function create_drop_down($a,$b,$c){ ?>
<select  name="" id="drop">
 <?php
  
    $data = array($a,$b,$c);
    foreach($data as $key){  ?>
        <option value="<?php echo $key ?>"><?php echo $key ?></option>
   <?php }   ?>
    </select>
  <?php 
}  
  ?>

