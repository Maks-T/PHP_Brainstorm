<?php

/** 
 * Получить упорядоченный по возрастанию массив С(К) 
 * путем слияния двух порядоченных по возрастанию 
 * массивов А(N) и В(М), где К=М+N. 
 * */

function getSumSortArray(array $arr1, array $arr2): array
{
  $l = count($arr1);

  for ($i = 0; $i < $l; $i++) {
    $arr1[$i] += $arr2[$i];
  }

  return $arr1;
}

echo '<pre>';
print_r(getSumSortArray([1, 3, 4, 5, 6, 8, 9, 99, 145], [10, 11, 12, 13, 45, 78, 99, 101, 102, 145]));
echo '</pre>';
