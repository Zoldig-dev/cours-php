<?php

class User {
  private string $pseudo;
  private string $mdp;

  public function getPseudo(): string{
    return $this->pseudo;
  }
  public function setPseudo($pseudo): void{
    $this->pseudo = $pseudo;
  }
  // public function addPseudo(){

  // }
  public function getMdp(): string{
    return $this->mdp;
  }
  public function setMdp($mdp): void{
    $this->mdp = $mdp;
  }
}

?>