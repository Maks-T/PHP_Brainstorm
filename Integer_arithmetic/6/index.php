<?php

/**  Найти наибольший общий делитель (НОД) 
 * двух натуральных чисел N и M, 
 * реализуя алгоритм эвклида. 
 */

function gcd(int $a, int $b): int
{
  while ($a !== 0 && $b !== 0) {
    if ($a > $b) {
      $a = $a % $b;
    } else {
      $b = $b % $a;
    }
  }

  return $a + $b;
}

echo gcd(20, 5);
