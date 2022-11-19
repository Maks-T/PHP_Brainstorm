<?php

/** В массиве А(N,M) расположить элементы строк в 
 * порядке убывания. Вставить в каждую строку
 * заданное число р, не нарушая этот порядок.
 * */

/** @var array[] $arr */
function trasformMatrix(array $arr, int $p): array
{
  $li = count($arr);

  for ($i = 0; $i < $li; $i++) {
    $arr[$i][] = $p;

    $arr[$i] = sortBubbleDown($arr[$i]);
  }

  return $arr;
}

function sortBubbleDown(array $arr): array
{
  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    for ($j = 1; $j < $l - $i; $j++) {
      if ($arr[$j] > $arr[$j - 1]) {
        [$arr[$j], $arr[$j - 1]] = [$arr[$j - 1], $arr[$j]];
      }
    }
  }

  return $arr;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [101, 11, 2, 100, 4, 8, 10],
    [1, 2, 70, 14, 16, 20],
    [1, 2, 70, 14, 11, 21, 30],
  ], 15)
);
echo '</pre>';
