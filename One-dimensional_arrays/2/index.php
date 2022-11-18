<?php

/**
 * Дан массив А(N). Получить массив В(N), i-элемент 
 * которого равен среднему арифметическому
 * первых i элементов массива А.
 */

 function getAverageArr(array $arr) 
 {
  $l = count($arr);
  $curSum = 0;
  $res = [];

  for ($i = 0; $i<$l; $i++) {
    $curSum += $arr[$i];
    $res[] = $curSum/($i+1);
  }

  return $res;
 }

 var_dump(getAverageArr([1,2,3]));
 var_dump(getAverageArr([6,6,6,6,6,6,1]));