<?php
global $pdo;

function find_full_rooms()
{

  $pdo = new PDO("mysql:host=localhost;dbname=lp_official", 'root', '');
  $stmt = $pdo->prepare('SELECT ');
}
