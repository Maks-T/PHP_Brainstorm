<?php

/** В массиве А(N,М) поменять местами столбцы, 
 * содержащие максимальный и минимальный элементы.
 */

/** @var array[] $arr */
function trasformMatrix(array $arr): array
{
  $li = count($arr);
  $lj = count($arr[0]);
  $min = null;
  $max = null;
  $jmin = 0;
  $jmax = 0;

  for ($j = 0; $j < $lj; $j++) {
    //get min and max element
    for ($i = 0; $i < $li; $i++) {
      if ($min !== null && $arr[$i][$j] < $min) {
        $min = $arr[$i][$j];
        $jmin = $j;
      }

      if ($min === null) {
        $min = $arr[$i][$j];
        $jmin = $j;
      }

      if ($max !== null && $arr[$i][$j] > $max) {
        $max = $arr[$i][$j];
        $jmax = $j;
      }

      if ($max === null) {
        $max = $arr[$i][$j];
        $jmax = $j;
      }
    }
  }

  //change columns
  for ($i = 0; $i < $li; $i++) {
    [$arr[$i][$jmax], $arr[$i][$jmin]] = [$arr[$i][$jmin], $arr[$i][$jmax]];
  }

  return $arr;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [4, 0, -1, 3],
    [4, 4, 5, 6],
    [4, 6, 10, 100],
  ])
);
echo '</pre>';
