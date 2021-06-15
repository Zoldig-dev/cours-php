<?php

$sting = '';

if(isset($_GET['firstName'])){
  $sting .= 'mon prenom est ' .$_GET['firstName'].',';
}
if(isset($_GET['lastName'])){
  $sting .= ' mon nom est '.$_GET['lastName'].',';
}
if(isset($_GET['sexe'])){
  print_r($_GET['sexe']);
}
if(isset($_GET['age'])){
  print_r($_GET['age']);
}
if(isset($_GET['job'])){
  $sting .= ' mon métier est '.$_GET['job'].'.</br>';
}

echo $sting;


?>

<a href="../get/index.php">-</a>