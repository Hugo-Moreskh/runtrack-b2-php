<?php

class Grade
{
  private int $id;
  private int $room_id;
  private string $name;
  private DateTime $year;

  public function __construct(int $id = 0, int $room_id = 0, string $name = "", DateTime $year = new DateTime("1968-02-15"))
  {

    $this->id = $id;
    $this->room_id = $room_id;
    $this->name = $name;
    $this->year = $year;
  }

  public function getId(): int
  {
    return $this->id;
  }
  public function setId( int $nbr): static
  {
    if ($nbr >= 0) {
      $this->id = $nbr;
    }
  }

  public function getRoomId(): int
  {
    return $this->room_id;
  }
  public function setRoomId( int $nbr): static
  {
    if ($nbr >= 0) {
      $this->room_id = $nbr;
    }
  }

  public function getName(): string
  {
    return $this->name;
  }
  public function setName( string $str): static
  {
    if ($str != "") {
      $this->name = $str;
    }
  }

  public function getYear(): DateTime
  {
    return $this->year;
  }
  public function setBirthdate( string $str): self
  {
    if ($str != "") {
      $this->year = new DateTime($str);
    }
  }
};
