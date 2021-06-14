<?php

$errors = fopen('error.txt', 'a+');
$errortab = explode('--er', fgets($errors));
fclose($errors);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/erreur.css">
  <title>Document</title>
</head>

<body>
  <div class="error">
    <?php foreach($errortab as $error){
      if('' !== $error){
        echo '<p class="errors">'.$error.'</p>';
      }
    }
    if(count($errortab) === 1){
      echo '<p class="succes">Vous ete un génie!!!</p>';
    }
    ?>
  </div>
  <a href="errorClean.php"><button class="btn">Clear</button></a>

</body>

</html>