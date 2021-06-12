<?php 
include_once('ability.php');

class Warrior extends Hero {

  public function __construct($name) {
    parent::__construct(24, 12, 14, $name, 5, 2, 2,'Guerrier', '../images/viking-head.svg');
    $this->setDamage($this->strength);
    $this->abilityRatio = 1.8;
    $ability = new Ability('Heurtoir', $this->firstCarac * $this->abilityRatio, 150, '../../images/heurtoir.svg');
    $this->setAbility($ability);
  }

}