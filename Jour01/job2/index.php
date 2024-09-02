<?php
function myStrLength($str)
{
  $length = 0;
  while (isset($str[$length])) {
    $length++;
  }
  return $length;
}
function my_str_reverse(string $string): string
{
  $length = myStrLength($string);
  $r = "";
  while ($length > 0) {
    $length--;
    $r .= $string[$length];
  }
  return $r;
}
echo my_str_reverse("hello");
