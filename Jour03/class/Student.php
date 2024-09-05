<?php

class Student
{
  private int $id;
  private int $grade_id;
  private string $email;
  private string $fullname;
  private DateTime $birthdate;
  private string $gender;

  public function __construct(int $id = 0, int $grade_id = 0,  string $email = "",  string $fullname = "",  DateTime $birthdate = new DateTime("1968-02-14"), string $gender = "")
  {
    $this->id = $id;
    $this->grade_id = $grade_id;
    $this->email = $email;
    $this->fullname = $fullname;
    $this->birthdate = $birthdate;
    $this->gender = $gender;
  }

  public function getId(): int
  {
    return $this->id;
  }
  public function setId( int $nbr): int
  {
    if ($nbr >= 0) {
      $this->id = $nbr;
    }
  }

  public function getEmail(): string
  {
    return $this->email;
  }
  public function setEmail (string $str): string
  {
    if ($str != "") {
      $this->email = $str;
    }
  }

  public function getFullName(): string
  {
    return $this->fullname;
  }
  public function setFullName(string $str): string
  {
    if ($str != "") {
      $this->fullname = $str;
    }
  }

  public function getBirthdate(): DateTime
  {
    return $this->birthdate;
  }
  public function setBirthdate( string $str): self
  {
    if ($str != "") {
      $this->birthdate = new DateTime($str);
    }
  }

  
  public function getGender(): string
  {
    return $this->gender;
  }
  public function setGender(string $str): string
  {
    if ($str != "") {
      $this->gender = $str;
    }
  }
  
};
