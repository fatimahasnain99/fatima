<?php
/*$array1 = array(
'11' => 'x1',
'22' => 'x1' 
);  

$array2 = array(
'22' => 'x2',
'33' => 'x2' 
);*/

$array1 = array( 
         1 =>'january', 
         2 =>'February', 
         3 =>'March'
          ); 
  
 $array2 = array( 
          4 => 'April', 
          5 => 'May', 
          6 => 'june', 
          7 => 'July', 
          8 => 'August', 
          9 => 'September'
         ); 
array_pop($array2);
array_pop($array2);
print_r($array1+$array2);
?>