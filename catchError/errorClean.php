<?php
$errors = fopen('error.txt', 'a+');
$errorBox = fgets($errors);
fclose($errors);
$errorBoxes = fopen('errorBox.txt', 'a+');
fwrite($errorBoxes, $errorBox);
fclose($errorBoxes);
$errors = fopen('error.txt', 'w+');
fwrite($errors, '');
fclose($errors);
header('location: http://localhost:8000/catchError/error.php');