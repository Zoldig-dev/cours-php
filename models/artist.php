<?php

include_once('albums.php');

class Artist {
  private string $name;
  private string $nationality;
  private DateTime $startYear;
  private array $albums;

  public function __construct()
  {
    $this->albums = [];
  }


  public function getName(): string{
    return $this->name;
  }
  public function setName($name): void{
    $this->name = $name;
  }
  public function getNationality(): string{
    return $this->nationality;
  }
  public function setNationality($nationality): void{
    $this->nationality = $nationality;
  }
  public function getYear(): DateTime{
    return $this->startYear;
  }
  public function setYear($startYear): void{
    $this->year = $startYear;
  }
  public function getAlbums(): array{
    return $this->albums;
  }
  public function addAlbums(Albums $albums): void{
    if(!in_array($albums, $this->albums)){
      $this->albums[] = $albums;
    }
  }

}

?>