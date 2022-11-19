<?php

/**  В массиве А(N,M) элементы, кратные заданному числу р, 
 * переместить в начало строк и расположить их в порядке возрастания.*/

/** @var array[] $arr */
function trasformMatrix(array $arr, int $p): array
{
  $li = count($arr);

  for ($i = 0; $i < $li; $i++) {
    $lj = count($arr[$i]);
    $multiple = [];
    $rest = [];

    for ($j = 0; $j < $lj; $j++) {
      if ($arr[$i][$j] % $p === 0) {
        $multiple[] = $arr[$i][$j];
      } else {
        $rest[] = $arr[$i][$j];
      }
    }

    $arr[$i] = [...sortBubble($multiple), ...$rest];
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
    [101, 11, 2, 100, 4, 8, 10],
    [1, 2, 70, 14, 16, 20],
  ], 2)
);
echo '</pre>';
