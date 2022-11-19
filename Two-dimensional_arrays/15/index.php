<?php

/**  В массиве А(N,М) столбец с минимальным количеством 
 * нечетных элементов переставить на последнее место.
 */

/** @var array[] $arr  */
function trasformMatrix(array $arr): array
{
  $arr = revertMatrix($arr);
  $l = count($arr);
  $imin = 0;

  for ($i = 1; $i < $l; $i++) {
    if (countOdd($arr[$i]) < countOdd($arr[$i - 1])) {
      $imin = $i;
    }
  }

  $alterArr = $arr[$imin];

  array_splice($arr, $imin, 1);
  $arr[] = $alterArr;

  return revertMatrix($arr);
}

function countOdd(array $arr): int
{
  $l = count($arr);
  $sumOdd = 0;

  for ($i = 0; $i < $l; $i++) {
    if ($arr[$i] % 2 !== 0) {
      $sumOdd++;
    }
  }

  return $sumOdd;
}

/** @var array[] $arr */
function revertMatrix($arr): array
{
  $li = count($arr);
  $lj = count($arr[0]);
  $res = [];
  for ($j = 0; $j < $lj; $j++) {
    $column = [];
    for ($i = 0; $i < $li; $i++) {
      $column[] = $arr[$i][$j];
    }
    $res[] = $column;
  }
  return $res;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [1, 3, 3, 7, 9],
    [1, 3, 2, 7, 9],
    [1, 3, 2, 7, 9],
  ])
);
echo '</pre>';
