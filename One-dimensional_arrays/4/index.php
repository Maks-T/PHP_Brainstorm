<?php

/**
 * В массив А(N), упорядоченный по возрастанию, в
 * ставить k элементов, не нарушая его последовательности.
 */

 function countDifferentElem(array $arr, array $add_arr): array 
{
  while (count($add_arr)) {
    $el = array_pop($add_arr);
        $l = count($arr);
        if ($arr[0]>=$el) {
            array_splice($arr, 0, 0, $el);
            continue;
          }

        for ($i=$l-1; $i>=0; $i--) {          
          if ($arr[$i]<$el) {
            array_splice($arr, $i+1, 0, $el);
            break;
          }
        }
  }

  return $arr;
}

echo '<pre>';
print_r(countDifferentElem([2,10,20,30,40], [1,13,22,41,3,12,1,1,41,56]));
echo '</pre>';