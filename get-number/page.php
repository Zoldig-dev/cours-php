<?php

function numberTentative(string $string){
  $nbr = random_int(1, 9);
  $count = 0;
  $numbers = str_split($string);
  foreach($numbers as $number){
    while($nbr != intval($number)){
      $nbr = random_int(1, 9);
      $count++;
    }
  }
  return $count;
}

if(isset($_GET['number'])){
  $tours = [];

  for ($i=0; $i < 10; $i++) { 
    $tours[] = numberTentative($_GET['number']);
  }
  
  echo 'le nombre de tentative pour 1 tour est : '.numberTentative($_GET['number']).', pour 10 tours, la moyenne est de: '.array_sum($tours) / count($tours);
}