<?php


function countLessThanFive(int $n): int
{
  $rest = $n;
  $countN = 0;

  while ($rest > 1) {
    $rest = $rest / 10;

    $fract = (int)(($rest - floor($rest)) * 10);

    if ($fract < 5) {
      $countN++;
    }
  }

  return $countN;
}

echo (countLessThanFive(44223993));
