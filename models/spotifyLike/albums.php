<?php

include_once('songs.php');
include_once('../shared/functionTime.php');

class Albums {
  private string $name;
  private int $year;
  private float $price;
  private array $songs;

  public function __construct()
  {
    $this->songs = [];
  }

  public function getName():string{
    return $this->name;
  }
  public function setName($name): void{
    $this->name = $name;
  }
  public function getYear(): int{
    return $this->year;
  }
  public function setYear($year): void
  {
    $this->year = $year;
  }
  public function getPrice(): float{
    return $this->price;
  }
  public function setPrice($price): void{
    $this->price = $price;
  }
  public function getSongs(): array{
    return $this->songs;
  }
  public function addSongs(Songs $songs): void{
    if(!in_array($songs, $this->songs)){
      $this->songs[] = $songs;
      $this->dateUpdate = new DateTime();
    }
  }
  public function getDurationAlbums(array $songs): string{
    $dureeAlbum = 0;
    foreach ($songs as $song) {
      $dureeAlbum += $song->transformTime();
    }
    return changeFormatTime2($dureeAlbum);
  }
}