<?php

$links = [
  'Home' => 'index.php',
  'Jour 1' => 'jour1.php',
  'Jour 2' => 'jour2.php',
  'Jour 3' => 'jour3.php'
];

// exo 1

$inString = "Bonjour";

function modifString($inString){
  $outString = "";
  $vowelTab = ['a', 'e', 'i' ,'o', 'u', 'y'];
  foreach (str_split($inString) as $char) {
    $outString .= $char;
    if(in_array($char, $vowelTab)){
      $outString .= 'fe'.$char;
    }
  }
  return $outString;
}

// exo 2 

function makeCards(){
  $cardGame = [];
  $cardSymbole = ['Coeur', 'Pic', 'Trefle', 'Carreau'];
  $cardFamily = ['As', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
  foreach($cardSymbole as $symbole){
    foreach($cardFamily as $family){
      $cardGame[] = $family. " " .$symbole;
    }
  }
  return $cardGame;
}

$deckCards = makeCards();

function melangeCards($deckCards){
  // shuffle($deckCards);
  $newDeck = [];
  while (count($deckCards)>0) {
    $randomKey = rand(0, count($deckCards)-1);
    $newDeck[] = $deckCards[$randomKey];
    array_splice($deckCards, $randomKey, 1);
  }
  return $newDeck;
}

$deckCards = melangeCards($deckCards);
$saveCards = $deckCards;
// 1v1 gare du poulet au KFC
function pickCard(&$deckCards){
    $hand = [];
    while (count($deckCards) > 47) {
      $hand[] = $deckCards[0];
      array_splice($deckCards, 0, 1);
    }
    // echo '<pre>';
    // var_dump($hand);
    // echo '</pre>';

    return $hand;
}

$hand = pickCard($deckCards);

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
      <p>Faire une fonction qui permet d'ajouter des 'fe' après chaque voyelle d'une chaîne de caractère, et répéter la
        voyelle précédente, passée en paramètre</p>
      <hr>
      <p>Chaine de départ : <?= $inString ?></p>
      <p>Chaine aprés modification : <?= modifString($inString) ?></p>
    </div>
    <div class="card">
      <h2>II</h2>
      <p>Simuler un jeu de 52 cartes :
        - 13 cartes par couleur (pique, trèfle, carreau et coeur)
        - Les cartes vont de 1 à 10 et valet, dame roi</p>

      <p>Vous représenterez dans premier temps le jeu de cartes dans un tableau tout simple</p>


      <p>Faites une fonction pour mélanger le jeu de cartes</p>


      <p>Faites une fonction qui permet de piocher X cartes</p>
      <hr>
      <h3>Deck de base :</h3>
      <div class="cartes">
        <?php foreach(makeCards() as $card ){
          echo '<div class="carte">'. $card .'</div>';
        }
        ?>
      </div>
      <hr>
      <h3>Deck mélangé :</h3>
      <div class="cartes">
        <?php foreach($saveCards as $newCard ){
          echo '<div class="carte">'. $newCard .'</div>';
        }
        ?>
      </div>
      <hr>
      <h3>Carte piochée :</h3>
      <div class="cartes">
        <?php foreach($hand as $newCard ){
            echo '<div class="carte">'. $newCard .'</div>';
          }
          ?>
      </div>
    </div>
    <div class="card">
      <h2>III</h2>
      <p>Créer un tableau associatif qui représentera l'espace d'une bataille navale
        Un jeu de bataille navale va de a à j, en ordonné et de 1 à 10, en abscisse
      </p>
      <p>
        Le jeu sera assimilé à un tableau associatif dont la clé vaut 'a1', 'a2' etc
        Et la valeur 'true' ou 'false' pour indiquer la présence ou non d'un bateau
      </p>

      <p>Affichez votre tableau de jeu (avec ou sans html/css)</p>

      <p>Faites une fonction qui prend en argument une coordonnée (a1) et pour cette coordonnée, renvoit si un bateau
        est
        présent sur cette case ou non</p>
      <p><?= $inString ?></p>
    </div>

  </div>

</body>

</html>