<?php
    //Bubble Sort

   $dizi = array(9,1,8,2,7,6,3,5,4,11,99,66,88,55,22,33,44,77,78,95,84,86,98,97,79,74,75,76,81,82,83,89,14,19,16,13,15,17,18,12,63,67,64,62,35,39,34,37,31,32);
    function bubblesort (){

    	while(true){

    		$finish = 1;

    		for($i = 1; $i < 50; $i++){

    			if($dizi[$i] < $dizi[$i - 1]){

    				$temp = $dizi[$i - 1];
    				$dizi[$i - 1] = $dizi[$i];
    				$dizi[$i] = $temp;
    				$finish = 0;
    			}
    		}

    		if($finish){
    			break;

    		}
    	}

    	foreach($dizi as $value){
    		echo $value;

    	}
    }
    
    bubblesort ($dizi);



?>