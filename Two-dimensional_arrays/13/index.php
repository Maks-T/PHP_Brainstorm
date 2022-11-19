<?php

/** В массив А(N,М) вставить одномерный массив В(N), расположив
 *  его перед последним столбцом, содержащим нулевой элемент. 
 * Если такого столбца не окажется, то вставить массив
 * В(N) после последнего столбца.
 */

/** @var array[] $arr  */
function trasformMatrix(array $arr, array $add_arr): array
{
  $arr = revertMatrix($arr);

  $li = count($arr);
  $lj = count($arr[0]);
  $iz = -1;

  for ($i = $li - 1; $i >= 0; $i--) {
    for ($j = $lj - 1; $j >= 0; $j--) {
      if ($arr[$i][$j] === 0) {
        $iz = $i;
        break 2;
      }
    }
  }

  if ($iz === -1) {
    $arr[] = $add_arr;
  } else {
    array_splice($arr, $iz, 0, [$add_arr]);
  }

  return revertMatrix($arr);
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
    [1, 2, 0, 1, 7],
    [1, 4, 3, 1, 1],
    [1, 0, 3, 5, 7],
  ], [-2, -3, -4])
);
echo '</pre>';
