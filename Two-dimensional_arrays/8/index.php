<?php

/** В каждой строке массива А(N,М) удалить все четные 
 * положительные элементы, стоящие между первым 
 * и последним максимальными элементами.
 */

function transformArr(array $arr)
{
  $li = count($arr);

  for ($i = 0; $i < $li; $i++) {

    [$jf, $jl] =  getTwoMaxIndex($arr[$i]);
    $lj = count($arr[$i]);
    $transArr = [];

    for ($j = 0; $j < $lj; $j++) {
      if ($j <= $jf || $j >= $jl) {
        $transArr[] = $arr[$i][$j];
      } elseif ($arr[$i][$j] < 0 || $arr[$i][$j] % 2 !== 0) {
        $transArr[] = $arr[$i][$j];
      }
    }
    $arr[$i] = $transArr;
  }

  return $arr;
}

function getTwoMaxIndex(array $arr)
{
  $l = count($arr);
  $if = 0;
  $il = 0;

  for ($i = 1; $i < $l; $i++) {
    if ($arr[$i] > $arr[$il]) {
      $il = $i;
    }

    if (!$if) {
      $if = $il;
    }
  }

  return [$if, $il];
}


echo '<pre>';
print_r(
  transformArr([
    [1, -1, 2, 3, 4, -1, 5, 6, 1, 2, 8, -10, 1, 2],
    [4, 5, -4, 3, 2, 6, -1],

  ])
);
echo '</pre>';
