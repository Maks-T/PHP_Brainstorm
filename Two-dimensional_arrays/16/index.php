<?php

/**  В массиве А(N,M) расположить строки по убыванию
 *  значений максимальных элементов строк
 */

/** @var array[] $arr */
function trasformMatrix(array $arr): array
{
  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    for ($j = 1; $j < $l - $i; $j++) {
      if (max($arr[$j]) < max($arr[$j - 1])) {
        [$arr[$j], $arr[$j - 1]] = [$arr[$j - 1], $arr[$j]];
      }
    }
  }

  return $arr;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [101, 2, 100],
    [1, 2, 70],
    [1, 400, 3],
    [1, 2, 100],
    [1, 50, 1]

  ])
);
echo '</pre>';
