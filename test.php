<?php
//total transter water to one container to another.
// $total_water = 10;
// $total_bucket = 2;
// $quntity_per_bucket = 1;
// $water_waporise = 5;
function WaterTransfer($total_water, $total_bucket,$quntity_per_bucket,$water_waporise){
    $waporise_water = ($total_water*$water_waporise)/100;
    $bucket_contain_water = $total_bucket * $quntity_per_bucket;
    $bucket_water_waporise = ($bucket_contain_water*$water_waporise)/100;
    $total_waporise_water = $waporise_water + $bucket_water_waporise;
   return $total_transfer_water = $total_water - $total_waporise_water;
     
 }
 // waterTransfer(50,2,5,3); //for result call function.



?>