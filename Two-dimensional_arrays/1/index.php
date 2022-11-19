<?php

/** В массиве А(N,N) найти суммы элементов, 
 * расположенных на главной диагонали, ниже 
 * диагонали и выше диагонали. 
 */

/** @var array[] $arr */
function getSums(array $arr): array
{
  $sumDiagonal = 0;
  $sumUp = 0;
  $sumDown = 0;
  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    for ($j = 0; $j < $l; $j++) {
      if ($i === $j) {
        $sumDiagonal += $arr[$i][$j];
      } elseif ($i > $j) {
        $sumDown += $arr[$i][$j];
      } elseif ($i < $j) {
        $sumUp += $arr[$i][$j];
      }
    }
  }

  return [
    'sumUp' => $sumUp,
    'sumDiagonal' => $sumDiagonal,
    'sumDown' => $sumDown,
  ];
}

echo '<pre>';
print_r(
  getSums([
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 12]
  ])
);
echo '</pre>';
