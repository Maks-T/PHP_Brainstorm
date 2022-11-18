<?php

/** В массиве А(N) найти: а) число элементов, 
 * предшествующих первому отрицательному элементу; 
 * б) сумму нечетных элементов массива, 
 * следующих за последним отрицательным элементом 
*/

function arrayProcess(array $arr) 
{
  $elBeforeNegative = 0;
  $sumOddElAfterLastNegative = 0;
  $isNegExists = false;
  
  $l = count($arr);

  for ($i=0; $i<$l; $i++)
  {    
    if ($arr[$i]>0) {
      $elBeforeNegative+=$arr[$i];
    } else {
      $isNegExists = true;
      break;
    }
  }

  if (!$isNegExists) {

     return ['elBeforeNegative' => 0, 'sumOddElAfterLastNegative' =>  0];
  }

  for ($i=$l-1; $i>=0; $i--)
  {     
    if ($arr[$i]>0) {

      if ($arr[$i]%2 === 0) {

        $sumOddElAfterLastNegative+=$arr[$i];
      }      
    } else {

      break;
    }
  }  

  return [
    'elBeforeNegative' => $elBeforeNegative, 
    'sumOddElAfterLastNegative' =>  $sumOddElAfterLastNegative
  ];
}


var_dump(arrayProcess([1,2,3,4,5,-6,1,2,3,-2,4,6]));
var_dump(arrayProcess([1,2,3,4,5,1,2,3,4,6]));