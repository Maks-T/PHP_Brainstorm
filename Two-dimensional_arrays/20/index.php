<?php

/**  В массиве А(N,M) переставить строки так, чтобы строка 
 * с максимальной суммой элементов стала первой строкой, 
 * а остальные строки расположить в порядке возрастания
 *  элементов первого столбца.
 */

/** @var array[] $arr */
function trasformMatrix(array $arr): array
{
  $li = count($arr);
  $imax = 0;

  for ($i = 1; $i < $li; $i++) {
    if (max($arr[$i]) > max($arr[$i - 1])) {
      $imax = $i;
    }
  }

  [$arr[$imax], $arr[0]] = [$arr[0], $arr[$imax]];

  for ($i = 0; $i < $li; $i++) {

    for ($j = 2; $j < $li - $i; $j++) {
      if ($arr[$j][0] < $arr[$j - 1][0]) {
        [$arr[$j], $arr[$j - 1]] = [$arr[$j - 1], $arr[$j]];
      }
    }
  }


  return $arr;
}

function sortBubble(array $arr): array
{
  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    for ($j = 1; $j < $l - $i; $j++) {
      if ($arr[$j] < $arr[$j - 1]) {
        [$arr[$j], $arr[$j - 1]] = [$arr[$j - 1], $arr[$j]];
      }
    }
  }

  return $arr;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [101, 11, 2, 100, 4, 10],
    [10, 2, 70, 14, 16, 20],
    [7, 8, 11, 18, 17, 34],
    [98, 2, 70, 14, 46, 45],
    [17, 2, 65, 47, 46, 45],
  ])
);
echo '</pre>';
