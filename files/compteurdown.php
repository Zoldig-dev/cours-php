<?php

$count = 0;
$compteur = fopen('compteur.txt', 'a+');
$countContent = fgets($compteur);
fclose($compteur);
$count = intval($countContent) | 0;
$compteur = fopen('compteur.txt', 'w+');
--$count;
fwrite($compteur, $count);
fclose($compteur);

$compteur = fopen('compteur.txt', 'a+');
$compteAAfficher = fgets($compteur);
fclose($compteur);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/count.css">
  <title>Document</title>
</head>

<body>
  <div class="count">
    <?= '<a href="./compteurdown.php"><button class="btn">-</button></a>'; ?>
    <?= '<a href="./index.php"><button class="btn">+</button></a>'; ?>
    <p class="btn-count"><?= $compteAAfficher; ?></p>
  </div>
</body>

</html>