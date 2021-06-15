<?php

$pages = [
  'firstPage' => 'blablabla',
  'secondPage' => 'blabla'
];

if(isset($_GET['page'])){
  echo $pages[$_GET['page']];
}