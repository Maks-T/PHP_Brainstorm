<?php

/**  
 * В массиве А(N) подсчитать количество различных элементов.
 */

 function countDifferentElem(array $arr): int
 {
  $res = [];
  $li = count($arr);

  for ($i = 0; $i<$li; $i++) {

    $lj = count($res);
    $isExist = true;

    for ($j = 0; $j<$lj; $j++) {
      if ($arr[$i] === $res[$j]) {
        $isExist = false;      
      }
    }

    if ($isExist) {
      $res[] = $arr[$i];
    }
  }

  return count($res);
}

var_dump(countDifferentElem([1,2,2,5,5,6,6,1,1,2,2,8]));

