<?php 
include_once('hero.php');


class Warrior extends Hero {
  public function __construct($name) {
    parent::__construct(24, 12, 14, $name, 5, 1, 2, '../images/viking-head.svg');
    $this->setDamage($this->strength);
  }
}