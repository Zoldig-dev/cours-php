<?php

class Style {
  private string $name;

  public function getName(): string
  {
    return $this->name;
  }
  public function setName($name): void{
    $this->name = $name;
  }
}

?>