<?php 

include_once('hero.php');
include_once('mage.php');
include_once('warrior.php');
include_once('rogue.php');
include_once('race.php');

$heroes= [];

$race1 = new Race('Murlock');

$mage1 = new Mage('Coper');
$mage1->setRace($race1);
$mage1->lvlUp();

$warrior1 = new Warrior('Field');
$warrior1->setRace($race1);

$rogue = new Rogue('Palazzo');
$rogue->setRace($race1);

$heroes[] = $mage1;
$heroes[] = $warrior1;
$heroes[] = $rogue;