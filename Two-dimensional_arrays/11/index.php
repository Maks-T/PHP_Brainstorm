<?php

/**  В массиве А(N,М) удалить нулевые строки. */

/** @var array[] $arr */
function trasformMatrix(array $arr): array
{
  for ($i = 0; $i < count($arr); $i++) {
    $lj = count($arr[$i]);
    $isZeroLine = true;

    for ($j = 0; $j < $lj; $j++) {
      if ($arr[$i][$j] !== 0) {
        $isZeroLine = false;
        break;
      }
    }

    if ($isZeroLine) {
      array_splice($arr, $i, 1);
    }
  }

  return $arr;
}

echo '<pre>';
print_r(
  trasformMatrix([
    [4, 0, -1],
    [4, 4, 5],
    [0, 0, 0],
    [4, 0, -1],
    [0, 0, 0],
    [4, 6, 10],
  ])
);
echo '</pre>';
