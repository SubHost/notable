<?php

if(isset($_GET['request'])){
  switch($_GET['request']){
    case 'physicians':
      require('physician.class.php');
      $physician = new Physician();
      $physician->getNameList();
    break;
  }
}

 ?>
