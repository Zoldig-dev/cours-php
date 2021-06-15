<?php

if (isset($_GET['value'], $_GET['operator'])) {
    $valueArr = str_split($_GET['value']);

    $numbers = [];
    $result = 0;
    $operator = '';

    foreach ($valueArr as $value) {
        if (is_int(intval($value)) && 0 !== intval($value)) {
            $numbers[] = intval($value);
        }
    }

    switch ($_GET['operator']) {
        case 'x':
            ++$result;
            $operator .= 'La multiplication';
            foreach ($numbers as $number) {
                $result *= $number;
            }

            break;

        case '+':
            $operator .= "L'addition";
            foreach ($numbers as $number) {
                $result += $number;
            }

            break;

        case '/':
            $operator .= 'La division';

            foreach ($numbers as $key => $number) {
                0 === $key ? $result += $number : $result /= $number;
            }

            break;

        case '-':
            $operator .= 'La soustraction';

            foreach ($numbers as $key => $number) {
                0 === $key ? $result += $number : $result -= $number;
            }

            break;

        default:
            // code...
            break;
    }

    echo $operator.' de tous les chiffres du paramètre value est égale à '.$result.'.';
}
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
  <a href="./">Retour</a>
</body>

</html>