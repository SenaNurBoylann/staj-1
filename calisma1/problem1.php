<?php
   $dizi = [9,1,8,2,7,6,3,5,4,11,99,66,88,55,22,33,44,77,78,95,84,86,98,97,79,74,75,76,81,82,83,89,14,19,16,13,15,17,18,12,63,67,64,62,35,39,34,37,31,32];
    
    function bubblesort ()
    {
    	$n = count($dizi);
    	do{
    		swapped = false;
    		for($i =1; $i<= $n - 1; $i++){
    		   if($dizi[$i - 1] > $dizi[$i]) {
    		   	$temp = $dizi[$i];
    			$dizi[$i] = $dizi[$i - 1];
    			$dizi[$i - 1] = $temp;
    			$swapped = true;
    		   	
    		   }
    			
    		}
    	} while($swapped == true);
    	return $dizi;
    }
print_r(bubblesort($dizi));

?>