<?php

function my_is_prime(int $number): bool
{
  for ($i = 2; $i < $number; $i++) {
    if ($number % $i === 0) {
      return false;
    } else {
      return true;
    }
  }
};
var_dump(my_is_prime(11));
/* i commence a 2, tant que i pas = à number on incrémente de 1 à chaque fois.
si mon number est divisible par un autre que lui alors return false sinon true */
