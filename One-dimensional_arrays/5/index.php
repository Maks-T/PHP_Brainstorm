<?php

/**
 * В массиве А(N) каждый элемент равен 0, 1 или 2. 
 * Переставить элементы массива так, чтобы сначала 
 * расположились все нули, затем все двойки и, 
 * наконец, все единицы.
 */

function getSortArray(array $arr): array
{
  $l = count($arr);
  $zeroArr = [];
  $oneArr = [];
  $twoArr = [];

  for ($i = 0; $i < $l; $i++) {
    if ($arr[$i] === 0) {
      $zeroArr[] = 0;
    } elseif ($arr[$i] === 1) {
      $oneArr[] = 1;
    } elseif ($arr[$i] === 2) {
      $twoArr[] = 2;
    }
  }

  return array_merge($zeroArr, $oneArr, $twoArr);
}

echo '<pre>';
print_r(getSortArray([0, 2, 1, 0, 2, 1, 0, 2, 1, 1, 0, 2, 1, 0, 2, 1, 1, 0, 2, 0]));
echo '</pre>';
