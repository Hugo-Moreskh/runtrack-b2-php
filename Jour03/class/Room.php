<?php

class Room
{
  private int $id;
  private int $floor_id;
  private string $name;
  private int $capacity;

  public function __construct(int $id = 0, int $floor_id = 0, string $name = "", int $capacity = 0)
  {

    $this->id = $id;
    $this->floor_id = $floor_id;
    $this->name = $name;
    $this->capacity = $capacity;
  }

  public function getId(): int
  {
    return $this->id;
  }
  public function setId($nbr): int
  {
    if ($nbr >= 0) {
      $this->id = $nbr;
    }
  }

  public function getFloorId(): int
  {
    return $this->floor_id;
  }
  public function setFloorId($nbr): int
  {
    if ($nbr >= 0) {
      $this->floor_id = $nbr;
    }
  }

  public function getName(): string
  {
    return $this->name;
  }
  public function setName( string $str): string
  {
    if ($str != "") {
      $this->name = $str;
    }
  }
  public function getCapacity(): int
  {
    return $this->capacity;
  }
  public function setCapacity( int $nbr): int
  {
    if ($nbr >= 0) {
      $this->capacity = $nbr;
    }
  }
};
