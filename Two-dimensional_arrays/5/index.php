<?php

/** В массиве А(N,М) найти сумму элементов тех столбцов, 
 * все элементы которых кратны заданному числу р .*/

/** @var array[] $arr */
function sumColumn(array $arr, int $n)
{
  $sum = 0;
  $l = count($arr);

  for ($j = 0; $j < $l; $j++) {
    $sumColumn = 0;
    for ($i = 0; $i < $l; $i++) {
      if ($arr[$i][$j] % $n === 0) {
        $sumColumn += $arr[$i][$j];
      } else {
        $sumColumn = 0;
        break;
      }
    }
    $sum += $sumColumn;
  }

  return $sum;
}

print_r(
  sumColumn([
    [10, 10, 3],
    [4, 5, 9],
    [8, 5, 18],
  ], 3)
);
