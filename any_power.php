<?php
$result = 1;  
function power_check($number,$b){
    global $result;
   if($number ==1 || $b == 0){
       return 1;
   }elseif($b>=1 && $number >=1){
       $result =  $result*$number."\n";
       power_check($number, $b-1);
       return $result;
   }elseif($b<0){
       $result = $result*$number."\n";
       power_check($number,$b+1);
        return 1/$result;;
   }elseif( $number< 0){
       $result =  $result*$number."\n";
       power_check($number, $b-1);
       return $result;
   }
}

echo $lest_check = power_check(-2,3);
//echo -2**3;






?>