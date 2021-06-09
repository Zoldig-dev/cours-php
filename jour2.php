<?php

include_once('shared/navLinks.php');
  
  // exo 1

  $grades = [
      'Albert' => [12, 8, 9, 7, 13],
      'Michel' => [14, 13, 12, 11, 10],
      'Vincent' => [17, 16, 15, 18, 13],
  ];
  
  function displayAverages($arrayGrades) {
      foreach($arrayGrades as $student => $grade) {
        $average = 0;
        foreach($grade as $note){
          $average += $note;
        }
        echo '<tr>';
        echo '<td>'.$student.'</td>';
        echo '<td>'.($average/sizeof($grade)).'</td>';
        echo '</tr>';
      }
  }
 
  // exo 2

  $tab1 = [1, 2, 2, 3, 3, 3, 4, 5, 5];
  

  function doublon($tab1){
    $tab2 = [];
    foreach($tab1 as $nbr){
      if(!in_array($nbr, $tab2)){
        $tab2[] = $nbr;
      }
    }
    return $tab2;
  }
  
  
  // exo 3

  $nb= 5;
  function calcul($nb) {
    for($i=1;$i<=12;$i++) {
      echo $nb.'x'.$i.' = '.$nb*$i.'<br/>';
    } 
  };

  // exo 4 

  $rest = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ratione.';
  function shortCut($rest){
    return substr($rest, 0, 15).' ...';
  }

  // exo 5 

  $mdp = 'Monsupermotdepasse@101';

  function checkPassword($mdp) {
    if (strlen($mdp) >=9 && strpos($mdp, '@')!==false) {
      echo 'Password valid!';
    } else {
      echo 'Password incorrect.';
    }
  }

  // exo 7

  function yatzee(){
    $diceTable = [];
    for($i = 0; $i <= 4; $i++){
       $diceTable[$i] = rand(1, 6);
    }
    
    return $diceTable;
  }
  
  function getResult($diceTable){
    $result = 'Try again';
    $diceValue = array_count_values($diceTable);
    $diffValue = doublon($diceTable);

    if(max($diceValue) > 4){
      $result = "Yams";
    }elseif(max($diceValue) > 3){
      $result = "Carré";
    }elseif(max($diceValue) > 2){
      $result = "Brelan";
      if(count($diffValue) == 2){
        $result = "Full";
      }
    }
    return $result;
  }

  $diceTable = yatzee();

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
  <h2 id="exo">Exercices</h2>
  <div class="container">
    <div class="card">
      <h2>I</h2>
      <p>A partir des notes de la question 5 de la journée précédente, vous les ajouterez dans une table :

        - Header : "Nom" et "Moyenne"
        - Contenu : le nom de l'étudiant et sa moyenne</p>

      <p>Vous pouvez réutiliser la fonction de moyenne faites la veille...</p>
      <hr>
      <table>
        <thead>
          <tr>
            <th>
              Eleve
            </th>
            <th>
              Moyenne
            </th>
          </tr>
        </thead>
        <tbody>
          <?= displayAverages($grades) ?>
        </tbody>
      </table>
    </div>
    <div class="card">
      <h2>II</h2>
      <p>Écrivez une fonction pour supprimer les doublons d’un tableau :
        Exemple :
        [1, 2, 2, 3, 3, 3, 4, 5, 5]
        Résultat attendu :
        [1, 2, 3, 4, 5]</p>
      <hr>
      <p> <?= doublon($tab1) ?> </p>
    </div>
    <div class="card">
      <h2>III</h2>
      <p>Avec **le moins de lignes de code possible**, proposez moi un algorithme qui, pour un nombre donné, affiche la
        table de multiplication liée.
        Par exemple :
        Si je demande 1, je veux voir :

        - 1x1 = 1
        - 1x2 = 2
        - etc
        Et ce jusqu'à 12</p>
      <hr>
      <p> <?= calcul($nb) ?> </p>
    </div>
    <div class="card">
      <h2>IV</h2>
      <p>Faites une fonction qui prend en argument une chaîne de caractères (LONGUE)
        Cette fonction doit afficher les 15 premiers caractères puis '...'
        Par exemple :

        - Je passe la chaîne : 'Lorem quisque class vestibulum'
        - La fonction doit afficher 'Lorem quisque c...'</p>
      <hr>
      <p> <?= $rest ?> </p>
      <p> <?= shortCut($rest) ?> </p>
    </div>
    <div class="card">
      <h2>V</h2>
      <p>Faites une fonction checkPassword, dont le but est de vérifier la validité d'un mot de passe, qui sera pris en
        argument
        Un mot de passe est considéré valide lorsqu'il fait plus de 9 caractères, et qu'il contient au moins le caratère
        '@'
        La fonction renverra un booléen pour indiquer la validité du mot de passe</p>
      <hr>
      <p><?= checkPassword($mdp) ?></p>
    </div>
    <div class="card">
      <h2>VII</h2>
      <p>Dice roll</p>
      <p>Faire une fonction qui simule un jeu de yatzee (https://fr.wikipedia.org/wiki/Yahtzee)
        Le Yatzee est un jeu de lancer de dé (au nombre de 5)
        Vous devrez afficher chaque lancé de dé, on va rester simple et afficher quelque chose de ce style :
        (1) (4) (6) (2) (4)

        Une fois le lancé affiché, la fonction doit informer l'utilisateur de ce qu'il a fait :

        - Brelan (3 dés du même résultat)
        - Carré (4 dés du même résultat)
        - Full (3 dés du même résultat et 2 dés du même résultat)
        - Yams (5 dés du même résultat)
        - Petite suite : 4 dés se suivent (1, 2, 3, 4 ou 2, 3, 4, 5 ou 3, 4, 5, 6)
        - Grande suite : les 5 dés se suivent</p>
      <hr>
      <p>
        <?= $diceTable[0]. " , " . $diceTable[1]. " , " .$diceTable[2]. " , " .$diceTable[3]. " , " .$diceTable[4]?>
      </p>
      <p>
        <?= getResult($diceTable) ?>
      </p>
    </div>
  </div>
</body>

</html>