<?php
include_once('shared/navLinks.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <nav>
    <div class="navUp">
      <?php foreach ($links as $key => $link){
          echo '<li><a href="' . $link . '">' . $key . '</a></li>';
        };
        ?>
    </div>
    <!-- <div class="navDown">
        <?php foreach ($linksDay as $key => $linkDay){
          echo '<li><a href="' . $linkDay . '">' . $key . '</a></li>';
        };
        ?>
      </div> -->
  </nav>


</body>

</html>