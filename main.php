
<?php
 $A =  [3, 4, 2];
 $avg = array_sum($A)/ count($A);
 //echo $avg;
 $output =[];
 for($i=0; $i<count($A); $i++){
     for($j=$i; $j<count($A); $j++){
         //echo "$i:$j--";
         $sub_a =array_slice($A,$i, $j-$i+1);
         $n_avg = array_sum($sub_a)/ count($sub_a);
         
         $remain = array_diff($A, $sub_a);
         if(count($remain)==0){
             $output[]=[$i+1,$j+1];
             continue;
         }
         $re_avg = array_sum($remain)/ count($remain);
         echo "$n_avg || $re_avg \n";
         if($n_avg>$re_avg){
             $output[]=[$i+1, $j+1];
         }
     }
 }
 var_dump($output);
