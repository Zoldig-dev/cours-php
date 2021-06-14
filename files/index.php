<?php

// ? exo 1

// $file = fopen('text.txt', 'w+');
// fwrite($file, "j'apprécie les fuits au sirop"."</br>");
// fclose($file);
// $file = fopen('text.txt', 'a+');
// $fileContent = fgets($file);
// fclose($file);

// $file2 = fopen('text1.txt', 'w+');
// fwrite($file2, "La vengeance est un plat qui se mange sans sauce");
// fclose($file2);
// $file2 = fopen('text1.txt', 'a+');
// $fileContent1 = fgets($file2);
// fclose($file2);

// $file3 = fopen('text2.txt', 'w+');
// fwrite($file3, $fileContent.$fileContent1);
// fclose($file3);
// $file3 = fopen('text2.txt', 'a+');
// $fileContent2 = fgets($file3);
// fclose($file3);

// echo $fileContent2;

// ? exo 2

$count = 0;
$compteur = fopen('compteur.txt', 'a+');
$countContent = fgets($compteur);
fclose($compteur);
$count = intval($countContent) | 0;
$compteur = fopen('compteur.txt', 'w+');
++$count;
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