<?php

/** В массиве А(N,М) найти максимальный и минимальный 
 * элементы среди всех элементов тех строк, которые 
 * упорядочены по возрастанию или по убыванию.*/

/** @var array[] $arr */
function findMaxElemInSequence(array $arr)
{
  $l = count($arr);
  $min = null;
  $max = null;

  for ($i = 0; $i < $l - 1; $i++) {
    if (ifSequenceUp($arr[$i])) {
      if ($min === null && $max === null) {
        $min = $arr[$i][0];
        $max = $arr[$i][count($arr[$i]) - 1];
      } else {
        if ($arr[$i][0] < $min) {
          $min = $arr[$i][0];
        }
        if ($arr[$i][count($arr[$i]) - 1] > $max) {
          $max = $arr[$i][count($arr[$i]) - 1];
        }
      }
    }

    if (ifSequenceDown($arr[$i])) {
      if ($min === null && $max === null) {
        $max = $arr[$i][0];
        $min = $arr[$i][count($arr[$i]) - 1];
      } else {
        if ($arr[$i][count($arr[$i]) - 1] < $min) {
          $min = $arr[$i][count($arr[$i]) - 1];
        }
        if ($arr[$i][0] > $max) {
          $max = $arr[$i][0];
        }
      }
    }
  }


  return ['max' => $max, 'min' => $min];
}

function ifSequenceUp(array $arr): bool
{
  $l = count($arr);
  $isUp = true;

  for ($i = 0; $i < $l - 1; $i++) {
    if ($arr[$i] > $arr[$i + 1]) {
      $isUp = false;
      break;
    }
  }

  return $isUp;
}

function ifSequenceDown(array $arr): bool
{
  $l = count($arr);
  $isDown = true;

  for ($i = 0; $i < $l - 1; $i++) {
    if ($arr[$i] < $arr[$i + 1]) {
      $isDown = false;
      break;
    }
  }

  return $isDown;
}

echo '<pre>';
print_r(
  findMaxElemInSequence([
    [1, 2, 3, 4, 10],
    [5, 6, 7, 8],
    [-100, 1, 2, 3],
    [1, 2, 3, 4]
  ])
);
echo '</pre>';
