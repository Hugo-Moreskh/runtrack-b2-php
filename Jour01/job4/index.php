<?php

function my_fizz_buzz(int $length): array
{
  $result = [];

  for ($i = 1; $i <= $length; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      $result[] = "FizzBuzz";
    } elseif ($i % 3 == 0) {
      $result[] = "Fizz";
    } elseif ($i % 5 == 0) {
      $result[] = "Buzz";
    } else {
      $result[] = $i;
    }
  }

  return $result;
}
$length = 15;
print_r(my_fizz_buzz($length));
