<?php

function getFourDigitNumber0237(int $n): array
{
  $rest = $n;
  $res = [];

  while ($rest > 1000) {

    $fract = $rest % 10000;

    $d1 = (int)$fract / 1000 % 10;
    $d2 = (int)($fract / 100) % 10;
    $d3 = (int)($fract / 10) % 10;
    $d4 = $fract % 10;

    if (($d1 === 0 || $d1 === 2 || $d1 === 3 || $d1 === 7)
      && ($d2 === 0 || $d2 === 2 || $d2 === 3 || $d2 === 7)
      && ($d3 === 0 || $d3 === 2 || $d3 === 3 || $d3 === 7)
      && ($d4 === 0 || $d4 === 2 || $d4 === 3 || $d4 === 7)
      && (($d1 + $d2 + $d3 + $d4) === 12)
    ) {
      $res[] = $fract;
    }

    $rest = (int)$rest / 10;
  }

  return $res;
}

var_dump(getFourDigitNumber0237(703213270132037));
