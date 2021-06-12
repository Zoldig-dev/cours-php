<?php 
include_once('hero.php');


class Mage extends Hero {
  public function __construct($name) {
    parent::__construct(13, 36, 8, $name, 2, 1 , 6,'Mage', '../images/robe.svg');
    $this->setDamage($this->intel);
    $this->abilityRatio = 2;
    $ability = new Ability('Fira', $this->principalCarac * $this->abilityRatio, 110, '../../images/fira.svg');
    $this->setAbility($ability);
  }
}