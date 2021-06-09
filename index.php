<?php
include_once('shared/navLinks.php');

$name = "Zold";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP</title>
</head>

<body>
  <nav>
    <div class="navUp">
      <?php foreach ($links as $key => $link){
        echo '<li><a href="./pages/' . $link . '">' . $key . '</a></li>';
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