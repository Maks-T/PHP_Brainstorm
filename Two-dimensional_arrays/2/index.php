<?php

/** В массиве А(N,М) найти номер строки, среднее 
 * арифметическое положительных элементов
 * которой является наименьшим. 
 */

/** @var array[] $arr */
function getSums(array $arr): ?int
{
  $minAvg = null;
  $nLine = null;

  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    $countPos = 0;
    $sumPos = 0;

    for ($j = 0; $j < $l; $j++) {
      if ($arr[$i][$j] > 0) {
        $countPos += 1;
        $sumPos += $arr[$i][$j];
      }
    }

    if ($minAvg) {
      if ($sumPos / $countPos < $minAvg) {
        $minAvg = $sumPos / $countPos;
        $nLine = $i;
      }
    } else {
      $minAvg = $sumPos / $countPos;
      $nLine = $i;
    }
  }

  return $nLine;
}

echo '<pre>';
print_r(
  getSums([
    [100, 2, 3, 4],
    [5, 6, 7, 8],
    [-1009, -10, -11, 3],
    [0, 0, 0, 1]
  ])
);
echo '</pre>';
