<?php

/** В массиве А(N,М) строку с максимальным количеством 
 * знакочередующихся элементов переставить на первое место.
 */

/** @var array[] $arr  */
function trasformMatrix(array $arr): array
{

  $l = count($arr);

  $imax = 0;

  for ($i = 1; $i < $l; $i++) {
    if (calcAlter($arr[$i]) > calcAlter($arr[$imax])) {
      $imax = $i;
    }
  }

  $alterArr = [$arr[$imax]];

  array_splice($arr, $imax, 1);
  array_splice($arr, 0, 0,  $alterArr);

  return $arr;
}

function calcAlter(array $arr): int
{
  $l = count($arr);
  $sumAlter = 0;

  for ($i = 1; $i < $l; $i++) {
    if (
      ($arr[$i] >= 0 && $arr[$i - 1] < 0) ||
      ($arr[$i] < 0 && $arr[$i - 1] >= 0)
    ) {
      $sumAlter++;
    }
  }

  return $sumAlter;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [1, -1, -1, -1, -7],
    [-1, 4, -3, 1, 1],
    [1, 0, 3, 5, 7],
    [-1, 1, -1, 1, -8],
  ])
);
echo '</pre>';
