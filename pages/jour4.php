<?php

include_once('../shared/navLinks.php');

include_once('../shared/songsDisplay.php');

$linksDay = [
  'Exo' => "#exo",
  'TP' => "#tp"
];

// exo 1 

function shortCut($rest){
  if(strlen($rest) >= 15){
    return substr($rest, 0, 15).' ...';
  }
  return $rest;
}

$milliseconds = 255000;

function changeFormatTime($milliseconds){
  $milliseconds *= 1000;
  $seconds = floor($milliseconds / 1000);
  $minutes = floor($seconds / 60);
  $hours = floor($minutes / 60);
  $milliseconds = $milliseconds % 1000;
  $seconds = $seconds % 60;
  $minutes = $minutes % 60;

  $format = '%u:%02u:%02u.%03u';
  $time = sprintf($format, $hours, $minutes, $seconds, $milliseconds);
  return rtrim($time, '0'). ($milliseconds ? '' : '000');
}

// TP

// songsDisplay.php

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>

<body>
  <nav>
    <div class="navUp">
      <?php foreach ($links as $key => $link){
        echo '<li><a href="'. ($link==='index.php'?'../':'') .'' . $link . '">' . $key . '</a></li>';
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
  <h2 id="exo">Exercices</h2>
  <div class="container">
    <div class="card">
      <h2>I</h2>
      <p>Faire une fonction qui prend en paramètre une durée, en miilisecondes

        Et l'afficher sous forme de chaîne de caratères

        Exemple :

        Param : 225000

        Affichage : 03:45"00</p>
      <hr>
      <p>
        <?= changeFormatTime($milliseconds) ?>
      </p>
    </div>
  </div>
  <h2 id="tp">TP</h2>
  <div class="container">
    <div class="card">
      <h2>I</h2>
      <p>Votre client souhaite concurrencer un grand site de musique en ligne. Vous devrez modéliser les classes
        nécessaire pour le faire.</p>
      <h3>Votre application doit permettre de :</h3>
      <ul>
        <li>* Stocker des chansons (un nom, une durée, un prix, une chanson a plusieurs artistes)</li>
        <li>
          * Stocker des albums (un nom, une année de sortie, prix, un album est composé de plusieurs chansons, mais une
          chanson peut avoir plusieurs albums...)
        </li>
        <li>
          * Stocker les artistes (un nom, une nationalité, une année de début, un artiste a plusieurs albums, un artiste
          a
          plusieurs styles de musique
        </li>
        <li>* Stocker les styles de musiques (un nom)</li>
        <li>* Stocker les utilisateurs (??????)</li>
        <li>
          * Stocker les playlists des utilisateurs, une playlist est composé de plusieurs chansons, une chanson peut
          -être
          dans plusieurs playlist, une playlist a un nom, une date de création et une date de modification)
        </li>
      </ul>


      <p>Voici un jeu de donnée pour créer vos objets :</p>

      <h3>* Chansons :</h3>
      <ul>
        <li>* (1, 'Fight fire with fire', '00:04:45', 0.99)</li>
        <li>* (2, 'Ride the lightning', '00:06:37', 0.99)</li>
        <li>*(3, 'For whom the bell tolls', '00:05:10', 0.99)</li>
        <li>* (4, 'Fade to black', '00:06:57', 0.99)</li>
        <li>* (5, 'Trapped under ice', '00:04:04', 0.99)</li>
        <li>* (6, 'Escape', '00:04:24', 0.99)</li>
        <li>* (7, 'Creeping death', '00:06:36', 0.99)</li>
        <li>* (8, 'The call of Ktulu', '00:08:53', 0.99)</li>
        <li>* (9, 'The ringer', '00:05:38', 0.99)</li>
      </ul>


      <h3>* Album :</h3>
      <ul>
        <li>* (1, 'Ride the lightning', 1984, 0, 10.99)</li>
      </ul>


      <h3>* Artiste :</h3>
      <ul>
        <li>*(1, 'Metallica', 'American', 1981)</li>
      </ul>


      <h3>* Styles :</h3>
      <ul>
        <li>* (1, 'Heavy metal')</li>
        <li>* (2, 'Thrash metal')</li>
        <li>* (3, 'Hard rock')</li>
      </ul>
      <hr>
      <h2>Toutes les chansons</h2>
      <div class="songs">
        <?php
          foreach ($songs as $song) {
            echo '<div class="song">'. '<h4>'.
            shortCut($song->getName()).'</h4>'.'<span class="song-duration">'. $song->getDuree().'</span>'.'<span class="song-price">'.
            $song->getPrix(). ' $ '. '</span>' .'</div>';
          }
        ?>
      </div>
      <div class="albums">
        <div class="album">
          <div class="album-desc">
            <div class="albumSong">
            </div>
          </div>
          <div class="album-info">
            <h3>Durée de l'album 1</h3>
            <span><?= $album1->getDurationAlbums($album1->getSongs())  ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>