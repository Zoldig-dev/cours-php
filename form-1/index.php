<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="content">
      <form action="form.php" method="POST">
        <label for="firstName"></label>
        <input type="text" name="firstName" placeholder="firstName" required>
        <label for="lastName"></label>
        <input type="text" name="lastName" placeholder="lastName" required>
        <label for="age"></label>
        <input type="number" name="age" placeholder="age" required>
        <button type="submit">Envoyer</button>
      </form>
    </div>
  </div>

</body>

</html>