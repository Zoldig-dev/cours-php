<?php

$operators = ['x', urlencode('+'), '/', '-'];
$randOperator = $operators[random_int(0, count($operators) - 1)];
$link = './page.php?value=5c3e76u2et1a5oi5s81wa9y5hg39546895285822852858525828552849999999999775485&operator='.$randOperator;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php echo '<a href="'.$link.'">GO</a>'; ?>
</body>

</html>