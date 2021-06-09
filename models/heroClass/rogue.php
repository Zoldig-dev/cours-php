<?php 
include_once('hero.php');


class Rogue extends Hero {
  public function __construct($name) {
    parent::__construct(13, 11, 26, $name, 2, 5, 1, '../images/sly.svg');
    $this->setDamage($this->agility);
  }
}