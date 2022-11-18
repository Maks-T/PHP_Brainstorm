<?php

/** 
 * Найти все четные четырехзначные числа, цифры 
 * которых следуют в порядке возрастания или убывания.
 */

function getFourDigitNumber(int $n): array
{
  $rest = $n;
  $res = [];

  while ($rest > 1000) {

    $fract = $rest % 10000;

    if (ifSequenceUp($fract) !== ifSequenceDown($fract)) {
      $res[] = $fract;
    }

    $rest = (int)$rest / 10;
  }

  return $res;
}

function ifSequenceDown(int $n): bool
{
  $rest = $n;
  $res = false;

  $rest = $rest / 10;
  $prevFract = (int)(($rest - floor($rest)) * 10);

  while ($rest > 1) {

    $rest = $rest / 10;
    $fract = (int)(($rest - floor($rest)) * 10);

    if ($prevFract < $fract) {
      $res = true;
    } else {

      return false;
    }

    $prevFract = $fract;
  }

  return $res;
}

function ifSequenceUp(int $n): bool
{
  $rest = $n;
  $res = false;

  $rest = $rest / 10;
  $prevFract = (int)(($rest - floor($rest)) * 10);

  while ($rest > 1) {

    $rest = $rest / 10;
    $fract = (int)(($rest - floor($rest)) * 10);

    if ($prevFract > $fract) {
      $res = true;
    } else {

      return false;
    }

    $prevFract = $fract;
  }

  return $res;
}

var_dump(getFourDigitNumber(98124891234));
var_dump(getFourDigitNumber(123419876));
var_dump(getFourDigitNumber(95217));
