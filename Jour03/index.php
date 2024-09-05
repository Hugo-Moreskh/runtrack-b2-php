<?php
require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Floor.php';
require_once 'class/Room.php';
require_once 'functions.php';


$student = new Student(1, 1, "email@email.com", "Terry Cristinelli", new DateTime("1998-01-18"), "male");
$student2 = new Student();
var_dump($student);
var_dump($student2);


$grade = new Grade(1, 8, "Bachelor 1", new DateTime("2023-01-09"));
$grade2 = new Grade();
var_dump($grade);
var_dump($grade2);


$room = new Room(1, 1, "RDC Food and Drinks", 90);
$room2 = new Room();
var_dump($room);
var_dump($room2);

$floor = new Floor(1,  "Rez de chaussée", 0);
$floor2 = new Floor();
var_dump($floor);
var_dump($floor2);


$student= new Student(1, 1, "email@email.com", "Terry Cristinelli", new DateTime("1998-01-18"), "male");
echo  'voici le mail : ' . $student-> getEmail();
 var_dump($student -> getBirthdate());


$grade = findOneGrade(1);
$student= findOneStudent(4);
$room= findOneRoom(3);
$floor= findOneFloor(2);