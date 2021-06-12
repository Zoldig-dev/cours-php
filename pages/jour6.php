<?php
include_once('../shared/navLinks.php');

include_once('../models/heroClass/index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/heroWar.css">
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
    <!-- <div class="navDown">
        <?php foreach ($linksDay as $key => $linkDay){
          echo '<li><a href="' . $linkDay . '">' . $key . '</a></li>';
        };
        ?>
      </div> -->
  </nav>
  <div class="logs">
    <h2>Log du combat</h2>
    <?php echo dragFight($mage1, $warrior1, $rogue, $drag1 ); ?>
  </div>
  <div class="container">
    <div class="rpgCard">
      <h2>Heroes</h2>
      <div class="heroes">
        <?php foreach($heroes as $hero){
           echo $hero->displayHtml();
          }; ?>
      </div>
    </div>
    <div class="rpgCard">
      <h2>Monsters</h2>
      <div class="heroes">
        <?php foreach($monsters as $monster){
           echo $monster->displayHtml();
          }; ?>
      </div>
    </div>
  </div>

</body>

</html>