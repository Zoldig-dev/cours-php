<?php 
include_once('hero.php');


class Mage extends Hero {
  public function __construct($name) {
    parent::__construct(15, 27, 8, $name, 1, 1 , 6, '../images/robe.svg');
    $this->setDamage($this->intel);
  }
}