<?php 

include_once('rpgEntity.php');
include_once('hero.php');
include_once('mage.php');
include_once('warrior.php');
include_once('rogue.php');
include_once('gobelin.php');
include_once('ogre.php');
include_once('dragon.php');
include_once('race.php');

$heroes= [];

$race1 = new Race('Murlock');

$mage1 = new Mage('Coper');
$mage1->setRace($race1);
$mage1->setLevel(20);
$mage1->rest(10000, 10000);

$warrior1 = new Warrior('Field');
$warrior1->setRace($race1);
$warrior1->setLevel(20);
$warrior1->rest(10000, 10000);

$rogue = new Rogue('Palazzo');
$rogue->setRace($race1);
$rogue->setLevel(20);
$rogue->rest(10000, 10000);

$heroes[] = $mage1;
$heroes[] = $warrior1;
$heroes[] = $rogue;

$monsters=[];

$gobs1 = new Gobelin(10);
$ogre1 = new Ogre(20);
$drag1 = new Dragon(30);

$monsters[] = $gobs1;
$monsters[] = $ogre1;
$monsters[] = $drag1;

// $heros = [$mage1, $warrior1, $rogue];
// $index = rand(0, 2);
// while(($mage1->dogFight($drag1) && $warrior1->dogFight($drag1) && $rogue->dogFight($drag1)) && !$drag1->isDead()) {
//     $drag1->dogFight($heros[$index]);
//     $index = rand(0, 2);
// }