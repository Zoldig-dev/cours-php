<?php
include_once('shared/navLinks.php');

$linksDay = [
  'Exo' => "#exo",
  'TP' => "#tp"
];

// exo 1

$age = 34;

// exo 2

$tab = [
  12, 15, 19, 2
];

// exo 3

$prixHt = 10;
$TVA = 1.2;
$nbProd = 10;

// exo 4

$eauTmp =[2, -10, 75];

// exo 5

$grades = [
  'Albert' => [12, 8, 9, 7, 13],
  'Michel' => [14, 13, 12, 11, 10],
  'Vincent' => [17, 16, 15, 18, 13]
];

function displayAverageStudent($grades) {
  foreach($grades as $student => $grade) {
      echo $student.' a une moyenne de '.(array_sum($grade)/count($grade)).'<br/>';
  }
}

// exo 6

function increasePrice($price, $percentile) {
    echo (($price * $percentile) / 100 + $price);
}

// ---------------------------------------------------------------
// tp
// ---------------------------------------------------------------

function battle(){
  function createHero($name, $hp, $damage) {
    return [
        'name' => $name,
        'hp' => $hp,
        'damage' => $damage,
    ];
}

$warrior = createHero('Warrior', 540, 25);
$mage = createHero('Mage', 430, 31);

function displayHero($hero) {
    echo 'Nom : ' . $hero['name'] . '<br>';
    echo 'Point de vie : ' . $hero['hp'] . '<br>';
    echo 'Dégâts : ' . $hero['damage'] . '<br>';
}

function dealDamages($heroAtk, &$heroDef) {
    
    $heroDef['hp'] -= getCrit($heroAtk['damage']);
    if ($heroDef['hp'] <= 0) {
        echo $heroAtk['name'] . ' a gagné !';
        return false;
    }
    displayHero($heroDef);
    return true;
}

while ($warrior['hp'] > 0 && $mage['hp'] > 0) {
    $keepFighting = dealDamages($warrior, $mage);
    if (!$keepFighting) {
        break;
    }
    dealDamages($mage, $warrior);
}
}

function getCrit($heroAtk){
  if(rand(0, 100) < 16){
    return $heroAtk['damage']*1.5;
  }
  return $heroAtk;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Jour 1</title>
</head>

<body>
  <nav>
    <div class="navUp">
      <?php foreach ($links as $key => $link){
        echo '<li><a href="' . $link . '">' . $key . '</a></li>';
      };
      ?>
    </div>
    <div class="navDown">
      <?php foreach ($linksDay as $key => $linkDay){
        echo '<li><a href="' . $linkDay . '">' . $key . '</a></li>';
      };
      ?>
    </div>
  </nav>
  <button class="btn-up">UP</button>
  <h2 id="exo">Exercices</h2>
  <div class="container">
    <div class="card">
      <h2>I</h2>
      <p>A partir d’un âge, on doit indiquer l’année de
        naissance</p>
      <hr>
      <p>Année de naissance : <?= date('Y') - $age ?></p>

    </div>
    <div class="card">
      <h2>II</h2>
      <p>A partir de ce tableau [ 12, 15, 19, 2], calculer la
        moyenne des valeurs.</p>
      <hr>
      <p>la valeur moyenne est : <?= array_sum($tab) / count($tab) ?></p>
    </div>
    <div class="card">
      <h2>III</h2>
      <p>A partir d’un prix HT unitaire d’un produit, ainsi
        que le nombre de produit. On veut connaitre le
        total TTC arrondi à 2 chiffres après la virgule.</p>
      <hr>
      <p>Total TTC : <?= round(($prixHt * $nbProd)*$TVA,2) ?></p>
    </div>
    <div class="card">
      <h2>IV</h2>
      <p>A partir de la température d’un volume d’eau,
        on veut savoir dans quel état est l’eau (solide,
        liquide ou gaz)
        (positif : liquide, négatif : solide, au dela de 70° [indicatif] : gaz)</p>
      <hr>
      <p>Température de l'eau : <?= $eauTmp[0]. ", " .$eauTmp[1]. ", " .$eauTmp[2] ?></p>
      <p>Etat de l'eau : <?php foreach($eauTmp as $valeur){
        if ($valeur >= 70){
          echo " gazeux ";
        }elseif($valeur < 0){
          echo " solide ";
        }else{
          echo " liquide ";
        }
      }  ?></p>
    </div>
    <div class="card">
      <h2>V</h2>
      <p>On souhaite stocker les notes d'étudiants, vous utiliserez un tableau associatif pour ça

        Données :
        * Albert : 12, 8, 9, 7, 13
        * Michel : 14, 13, 12, 11, 10
        * Vincent : 17, 16, 15, 18, 13

        Faite une fonction qui prend en paramètre un tableau de note et permet de calculer la moyenne de l'étudiant</p>
      <hr>
      <p><?= displayAverageStudent($grades) ?> </p>
    </div>
    <div class="card">
      <h2>VI</h2>
      <p>Faire une fonction qui prend 2 arguments en paramètres : un prix et un pourcentage.

        La fonction doit renvoyer le prix augmenté avec le pourcentage </p>
      <hr>
      <p> Le prix augmente de : <?= increasePrice(100, 15) ?> </p>
    </div>
  </div>
  <h2 id="tp">TP</h2>
  <div class="container">
    <div class="card">
      <h2>Dog fight</h2>
      <p>Faites une fonction qui prend en paramètres 6 arguments, les 3 premiers seront les clés d'un tableau et les 3
        suivantes leur valeur respective
        La fonction devra renvoyer le tableau créé et initialisé.
        Tester votre fonction avec :


        * name : Warrior
        * hp : 540
        * damages : 25


        * name : Mage
        * hp : 430
        * damages : 31</p>
      <p>Faites une fonction qui prend en paramètre un tableau de "Héros", cette fonction doit afficher un héros sous la
        forme :
        * Nom : xxxx
        * Point de vie : xxxx
        * Dégâts : xxxx


        Testez votre fonction</p>
      <p>Faites une fonction qui prend en pramètre deux tableaux de héros

        La fonction doit faire "combattre" chaque héros, un héros inflige des blessures à l'autre, à partir de ses
        dégâts (damages), aux points de vie (hp).
        C'est à dire que l'on va soustraire aux point de vie d'un héro, les dégâts de l'autre.


        Appelez cette fonction dans une boucle, tant qu'un héro est en vie, on fait combattre les héros chacun leur
        tour.</p>
      <p>Faire une fonction getDamages(), qui prend en argument un entier, correspondant aux dégâts d'un héros
        La fonction doit renvoyer les dégâts effectués
        Cependant, les dégâts peuvent être critiques, c'est dire qu'ils infligent 150% des dégâts normaux
        Les chances de coup critique sont de 15%
        Vérifiez votre fonction à partir des héros utilisés la veille</p>
      <hr>
      <p>
        <?= battle() ?>
      </p>
    </div>
  </div>
</body>

</html>