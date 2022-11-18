<?php

/**  Определить, является ли число 2n m симметричным, 
 * т. е. запись числа содержит четное количество цифр
 *  и совпадают его левая и правая половинки.
 */

function isSymmetrical(int $n): bool
{
  $length = (int) log10($n) + 1;
  if ($length % 2 !== 0) {
    return false;
  }

  $right = $n % 10 ** ($length / 2);
  $left = (int)($n / 10 ** ($length / 2));

  for ($i = 0; $i < $length / 2; $i++) {
    $dr = (int)($right / 10 ** $i) % 10;
    $dl = (int)($left / 10 ** ($length / 2 - $i - 1)) % 10;

    if ($dr !== $dl) {

      return false;
    }
  }

  return true;
}

var_dump(isSymmetrical(1412332141));
var_dump(isSymmetrical(14123321417));
