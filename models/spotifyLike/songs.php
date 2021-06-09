<?php

include_once('artist.php');
include_once('albums.php');
include_once('style.php');


class Songs {
  private string $name;
  private string $duree;
  private float $prix;
  private array $artistes;
  private array $style;

  public function __construct()
  {
    $this->artistes = [];
    $this->style = [];
  }

  public function getName(): string{
    return $this->name;
  }
  public function setName($name): void{
    $this->name = $name;
  }
  public function getDuree(): string{
    return $this->duree;
  }
  public function setDuree($duree): void{
    $this->duree = $duree;
  }
  public function getPrix(): float{
    return $this->prix;
  }
  public function setPrix($prix): void{
    $this->prix = $prix;
  }
  public function getArtistes(): array{
    return $this->artistes;
  }
  public function addArtistes(Artist $artistes): void{
    if(!in_array($artistes, $this->artistes)){
      $this->artistes[] = $artistes;
    }
  }
  public function getStyle(): array{
    return $this->style;
  }
  public function addStyle(Style $style): void{
    if(!in_array($style, $this->style)){
      $this->style[] = $style;
    }
  }
  public function transformTime(){
    $newTime = explode(":" ,$this->duree);
    $timeInSecond = intval($newTime[0])*3600 + intval($newTime[1])*60 + intval($newTime[2]);
    return $timeInSecond;
  }
}

?>