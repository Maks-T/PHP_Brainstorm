<?php

/** В матрице А(N,N) найти первую строку, не содержащую
 *  отрицательных элементов, и умножить ее как вектор на матрицу А.
 */

/** @var array[] $arr */
function multiplyMatrix(array $arr): array
{
  $li = count($arr);
  $vector = [];

  for ($i = 0; $i < $li; $i++) {
    if (isNotNegative($arr[$i])) {
      $vector = $arr[$i];
      break;
    }
  }

  for ($i = 0; $i < $li; $i++) {
    $lj = count($arr[$i]);
    for ($j = 0; $j < $lj; $j++) {
      $arr[$i][$j] *= $vector[$i];
    }
  }

  return $arr;
}

function isNotNegative(array $arr): bool
{
  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    if ($arr[$i] < 0) {
      return false;
    }
  }

  return true;
}

echo '<pre>';
print_r(
  multiplyMatrix([
    [1, -2, 3],
    [1, -1, 1],
    [2, 3, 1],
  ])
);
echo '</pre>';
