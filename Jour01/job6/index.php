<?php

function my_array_sort(array $arrayToSort, string $order): array
{
  $arrayLength = 0;
  if ($order === 'Asc') {

    foreach ($arrayToSort as $key => $value) {
      $arrayLength++;
      for ($i = 0; $i < $arrayLength; $i++) {
        if ($arrayToSort[$key] < $arrayToSort[$i]) {
          $bigger = $arrayToSort[$key];
          $smaller = $arrayToSort[$i];
          $arrayToSort[$key] = $smaller;
          $arrayToSort[$i] = $bigger;
        };
      };
    }
    return $arrayToSort;
  } elseif ($order === 'Desc') { {
      foreach ($arrayToSort as $key => $value) {
        $arrayLength++;
        for ($i = 0; $i < $arrayLength; $i++) {
          if ($arrayToSort[$key] > $arrayToSort[$i]) {
            $smaller = $arrayToSort[$key];
            $bigger = $arrayToSort[$i];
            $arrayToSort[$key] = $bigger;
            $arrayToSort[$i] = $smaller;
          };
        };
      }
    }
    return $arrayToSort;
  };
}
var_dump(my_array_sort([2, 56, 3, 22, 1], 'Asc')); 


/* je donne un tableau de nombres dans n'importe quel ordre et je veux qu'il soit ranger du plus petit au plus grand
je fais une boucle qui va comparer les index de mon tableau et quand il trouve le plus petit il l'enleve de ce tableau et le met dans le tableau vide.
tant que le tableau initial !=0 alors il continue la boucle */
