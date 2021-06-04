<?php

$name = "Zold";

$links = [
  'Home' => 'index.php',
  'Jour 1' => 'jour1.php',
  'Jour 2' => 'jour2.php',
  'Jour 3' => 'jour3.php'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP</title>
</head>

<body>
  <nav>
    <div class="navUp">
      <?php foreach ($links as $key => $link){
        echo '<li><a href="' . $link . '">' . $key . '</a></li>';
      };
      ?>
    </div>
  </nav>
  <div class="content">
    <div class="box">
      <h2>Bonjour <?= $name ?> </h2>
      <p>On s'ambiance sur PHP</p>
    </div>
  </div>
</body>

</html>