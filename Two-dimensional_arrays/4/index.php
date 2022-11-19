<?php

/** В массиве А(N,М) найти сумму тех элементов, 
 * в записи которых используются только цифры 0,1,3,8
 */

/** @var array[] $arr */
function sumEl0138(array $arr)
{
  $sum = 0;
  $li = count($arr);

  for ($i = 0; $i < $li; $i++) {
    $lj = count($arr[$i]);

    for ($j = 0; $j < $lj; $j++) {
      $sum += getIf01238OrZero($arr[$i][$j]);
    }
  }

  return $sum;
}

function getIf01238OrZero(int $n)
{
  $length = (int) log10($n) + 1;

  for ($i = 0; $i < $length; $i++) {
    $d = (int)($n / 10 ** $i) % 10;
    if (
      $d === 0 ||
      $d === 1 ||
      $d === 2 ||
      $d === 3 ||
      $d === 8
    ) {

      return $n;
    }
  }

  return 0;
}

print_r(
  sumEl0138([
    [1, 2, 10],
    [11, 0, 1],
    [8, 5, 4],
  ])
);
