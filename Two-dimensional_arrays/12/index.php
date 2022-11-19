<?php

/**  В массиве А(N,М) удалить столбцы, все элементы 
 * которых являются простыми числами.
 */

/** @var array[] $arr */
function trasformMatrix(array $arr): array
{
  $arr = revertMatrix($arr);
  $res = [];

  $l = count($arr);

  for ($i = 0; $i < $l; $i++) {
    if (!isSimpleLine($arr[$i])) {
      $res[] = $arr[$i];
    }
  }

  return revertMatrix($res);
}

function isSimpleLine(array $arr): bool
{
  $l = count($arr);

  $isSipmle = true;

  for ($i = 0; $i < $l; $i++) {
    if (!isSimpleNumber($arr[$i])) {
      $isSipmle = false;
      break;
    }
  }

  return $isSipmle;
}

function isSimpleNumber(int $n): bool
{
  $isSipmle = true;

  for ($i = 2; $i < $n; $i++) {
    if ($n % $i === 0) {
      $isSipmle = false;
      break;
    }
  }

  return  $isSipmle;
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
    [1, 2, 3, 6, 7],
    [1, 4, 3, 8, 1],
    [1, 2, 3, 5, 7],

  ])
);
echo '</pre>';
