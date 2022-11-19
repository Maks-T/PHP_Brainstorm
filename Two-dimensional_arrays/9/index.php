<?php

/** В массив А(N,М) после первого отрицательного элемента 
 * каждого столбца вставить число,равное минимальному элементу
 *  этого столбца. Если столбец не содержит отрицательных
 * элементов, то вставить это число перед первым элементом столбца
 * */

/** @var array[] $arr */
function trasformMatrix(array $arr): array
{
  $arr = revertMatrix($arr);

  $li = count($arr);
  $lj = count($arr[0]);


  for ($i = 0; $i < $li; $i++) {

    $jn = -1;
    $jm = 0;

    //get index min element
    for ($j = 1; $j < $lj; $j++) {
      if ($arr[$i][$j] < $arr[$i][$jm]) {
        $jm = $j;
      }
    }

    //get index first negative element
    for ($j = 1; $j < $lj; $j++) {
      if ($arr[$i][$j] < 0) {
        $jn = $j;
        break;
      }
    }

    if ($jn === -1) {
      array_splice($arr[$i], 0, 0, $arr[$i][$jm]);
    } else {
      array_splice($arr[$i], $jn + 1, 0, $arr[$i][$jm]);
    }
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
    [10, 20, 30],
    [-4, -5, -6],
    [7, 8, -90],
    [-70, -80, 9],
  ])
);
echo '</pre>';
