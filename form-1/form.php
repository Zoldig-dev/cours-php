<?php

if(isset($_POST['firstName'])){
  if(strlen($_POST['firstName']) <= 2 || strlen($_POST['firstName']) >=20){
    echo 'error';
  }else{
    echo $_POST['firstName'];
  }
  
}
if(isset($_POST['lastName'])){
  if(strlen($_POST['lastName']) <= 2 || strlen($_POST['lastName']) >=20){
    echo 'error';
  }else{
    echo $_POST['lastName'];
  }
}
if(isset($_POST['age'])){
  if(intval($_POST['age'] <= 0) || intval($_POST['age'] >= 99)){
    echo 'error';
  }else{
    echo $_POST['age'];
  }
  
}