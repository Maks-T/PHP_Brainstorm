<?php

/**  В массиве А(N,N) поменять местами максимальные элементы 
 * нижнего и верхнего треугольников относительно главной диагонали.
 * */

/** @var array[] $arr */
function swapMaxInMatrix(array $arr): array
{
  $l = count($arr);
  $maxUp = null;
  $maxDown = null;

  for ($i = 0; $i < $l; $i++) {
    for ($j = 0; $j < $l; $j++) {
      if ($i < $j) {
        if ($maxUp !== null && $maxUp < $arr[$i][$j]) {
          $maxUp = $arr[$i][$j];
          $iup = $i;
          $jup = $j;
        }
        if ($maxUp === null) {
          $maxUp = $arr[$i][$j];
          $iup = $i;
          $jup = $j;
        }
      }

      if ($i > $j) {
        if ($maxDown !== null && $maxDown < $arr[$i][$j]) {
          $maxDown = $arr[$i][$j];
          $idown = $i;
          $jdown = $j;
        }
        if ($maxDown === null) {
          $maxDown = $arr[$i][$j];
          $idown = $i;
          $jdown = $j;
        }
      }
    }
  }

  [$arr[$iup][$jup], $arr[$idown][$jdown]] = [$arr[$idown][$jdown], $arr[$iup][$jup]];

  return $arr;
}

echo '<pre>';
print_r(
  swapMaxInMatrix([
    [13, 2, 3],
    [4, 5, 6],
    [25, 36, 9]
  ])
);
echo '</pre>';
