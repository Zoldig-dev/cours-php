<?php

include_once('songs.php');


class Playlist {
  private array $songs;
  private string $name;
  private DateTime $dateCreation;
  private DateTime $dateUpdate;

  public function __construct(){
    $this->dateCreation = new DateTime();
    $this->dateUpdate = new DateTime();
    $this->songs = [];
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

  public function getName(): string{
    return $this->name;
  }
  public function setName($name): void{
    $this->name = $name;
    $this->dateCreation = new DateTime();
  }

  public function getDateCreation(): DateTime{
    return $this->dateCreation;
  }
  // public function setDateCreation($dateCreation): void{
  //   $this->dateCreation = $dateCreation;
  // }
  
  public function getDateUpdate(): DateTime{
    return $this->dateUpdate;
  }
  // public function setDateUpdate($dateUpdate): void{
  //   $this->dateUpdate = $dateUpdate;
  // }
}

?>