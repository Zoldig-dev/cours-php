<?php
  function test($string)
  {
      if ($string === 'aze123') {
          throw new Exception('Une erreur est survenue avec le mot: aze123 ');
      } else {
          return $string;
      }
  }
  
  try {
      echo test('blabla');
      echo test('truc');
      echo test('aze123');
  } catch (Exception $e) {
      echo $e->getMessage();
      $errors = fopen('error.txt', 'a+');
      fwrite($errors, $e->getMessage().'--er');
      fclose($errors);
  }



?>