<?php

include_once('race.php');

abstract class Hero {
  protected string $name;
  protected string $logo;
  protected Race $race;
  protected int $level;
  protected int $hp;
  protected int $hpMax;
  protected int $mana;
  protected int $manaMax;
  protected int $strength;
  protected int $agility;
  protected int $intel;
  protected int $lvlStrength;
  protected int $lvlAgility;
  protected int $lvlIntel;
  protected float $def;
  protected int $scoreCritStrike;
  protected int $critDamage;
  protected int $damageMin;
  protected int $damageMax;

  public function __construct(int $strength,int $intel,int $agility,string $name, int $lvlStrength, int $lvlAgility, int $lvlIntel, string $logo) {
    $this->level = 1;
    $this->scoreCritStrike = 12;
    $this->critDamage = 150;
    $this->name = $name;
    $this->setStrength($strength);
    $this->hp = $strength*19;
    $this->setIntel($intel);
    $this->setAgility($agility);
    $this->lvlStrength = $lvlStrength;
    $this->lvlAgility = $lvlAgility;
    $this->lvlIntel = $lvlIntel;
    $this->logo = $logo;
  }

  public function setDamage(int $caracFirst){
    $this->damageMin = round($caracFirst*1.2);
    $this->damageMax = round($caracFirst*1.4);
    $this->scoreCritStrike += round($caracFirst*0.08);
  }

  public function lvlUp(){
    $this->level++;
    $this->setStrength($this->strength + $this->lvlStrength);
    $this->setAgility($this->agility + $this->lvlAgility);
    $this->setIntel($this->intel + $this->lvlIntel);
  }

  public function displayHtml(): void{

    echo <<<HTML
      <div class="hero">
        <div class="hero-head">
          <div class="hero-info">
            <h3 class="hero-name"> {$this->name} </h3>
            <div class="hero-race"> {$this->race->getName()} </div>
            <span>{$this->hp} / {$this->hpMax}</span>
          </div>
          <div class="hero-logo"> <img src="{$this->logo}" >
          <div class="hero-lvl"> Niveau: {$this->level} </div>
          </div>
        </div>
        
        <div class="hero-stat">  
          <h4>Stat du héro</h4>
          <span>Force : {$this->strength}</span>
          <span>Agilité : {$this->agility}</span>
          <span>Intéligence : {$this->intel}</span>
          <h4>Dégats du héro</h4>
          <span>{$this->damageMin}</span>
          <span>{$this->damageMax}</span>
        </div>

      </div>
    HTML;

  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of race
   */ 
  public function getRace()
  {
    return $this->race;
  }

  /**
   * Set the value of race
   *
   * @return  self
   */ 
  public function setRace($race)
  {
    $this->race = $race;

    return $this;
  }

  /**
   * Get the value of level
   */ 
  public function getLevel()
  {
    return $this->level;
  }

  /**
   * Set the value of level
   *
   * @return  self
   */ 
  public function setLevel($level)
  {
    $this->level = $level;

    return $this;
  }

  /**
   * Get the value of hp
   */ 
  public function getHp()
  {
    return $this->hp;
  }

  /**
   * Set the value of hp
   *
   * @return  self
   */ 
  public function setHp($hp)
  {
    $this->hp = $hp;

    return $this;
  }

  /**
   * Get the value of hpMax
   */ 
  public function getHpMax()
  {
    return $this->hpMax;
  }

  /**
   * Set the value of hpMax
   *
   * @return  self
   */ 
  public function setHpMax($hpMax)
  {
    $this->hpMax = $hpMax;

    return $this;
  }

  /**
   * Get the value of mana
   */ 
  public function getMana()
  {
    return $this->mana;
  }

  /**
   * Set the value of mana
   *
   * @return  self
   */ 
  public function setMana($mana)
  {
    $this->mana = $mana;

    return $this;
  }

  /**
   * Get the value of manaMax
   */ 
  public function getManaMax()
  {
    return $this->manaMax;
  }

  /**
   * Set the value of manaMax
   *
   * @return  self
   */ 
  public function setManaMax($manaMax)
  {
    $this->manaMax = $manaMax;

    return $this;
  }

  /**
   * Get the value of strengh
   */ 
  public function getStrength()
  {
    return $this->strength;
  }

  /**
   * Set the value of strengh
   *
   * @return  self
   */ 
  public function setStrength($strength)
  {
    $this->strength = $strength;
    $this->hpMax = $strength*19;

    return $this;
  }

  /**
   * Get the value of agility
   */ 
  public function getAgility()
  {
    return $this->agility;
  }

  /**
   * Set the value of agility
   *
   * @return  self
   */ 
  public function setAgility($agility)
  {
    $this->agility = $agility;
    $this->def = $agility/6;

    return $this;
  }

  /**
   * Get the value of intel
   */ 
  public function getIntel()
  {
    return $this->intel;
  }

  /**
   * Set the value of intel
   *
   * @return  self
   */ 
  public function setIntel($intel)
  {
    $this->intel = $intel;
    $this->mana = $intel*17;

    return $this;
  }

  /**
   * Get the value of def
   */ 
  public function getDef()
  {
    return $this->def;
  }

  /**
   * Set the value of def
   *
   * @return  self
   */ 
  public function setDef($def)
  {
    $this->def = $def;

    return $this;
  }

  /**
   * Get the value of scoreCritStrike
   */ 
  public function getScoreCritStrike()
  {
    return $this->scoreCritStrike;
  }

  /**
   * Set the value of scoreCritStrike
   *
   * @return  self
   */ 
  public function setScoreCritStrike($scoreCritStrike)
  {
    $this->scoreCritStrike = $scoreCritStrike;

    return $this;
  }

  /**
   * Get the value of critDamage
   */ 
  public function getCritDamage()
  {
    return $this->critDamage;
  }

  /**
   * Set the value of critDamage
   *
   * @return  self
   */ 
  public function setCritDamage($critDamage)
  {
    $this->critDamage = $critDamage;

    return $this;
  }

  /**
   * Get the value of damageMin
   */ 
  public function getDamageMin()
  {
    return $this->damageMin;
  }

  /**
   * Set the value of damageMin
   *
   * @return  self
   */ 
  public function setDamageMin($damageMin)
  {
    $this->damageMin = $damageMin;

    return $this;
  }

  /**
   * Get the value of damageMax
   */ 
  public function getDamageMax()
  {
    return $this->damageMax;
  }

  /**
   * Set the value of damageMax
   *
   * @return  self
   */ 
  public function setDamageMax($damageMax)
  {
    $this->damageMax = $damageMax;

    return $this;
  }

  /**
   * Get the value of lvlStrength
   */ 
  public function getLvlStrength()
  {
    return $this->lvlStrength;
  }

  /**
   * Get the value of lvlAgility
   */ 
  public function getLvlAgility()
  {
    return $this->lvlAgility;
  }

  /**
   * Get the value of lvlIntel
   */ 
  public function getLvlIntel()
  {
    return $this->lvlIntel;
  }
}