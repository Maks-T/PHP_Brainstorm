<?php

/** 
 *  Выяснить, образуют ли цифры данного натурального
 *  числа N возрастающую последовательность.
 */

function ifSequence(int $n): bool
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

var_dump(ifSequence(1623456789));
var_dump(ifSequence(123456789));
