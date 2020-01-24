<?php 



search('text.txt',1);



function search($name,$value){



	$handle = fopen($name, "r");

	while(!feof($handle)){
		$string=fgets($handle,100);
		$explode=explode('\x0A', $string);
		array_pop($explode);
		$count=count($explode);

		foreach ($explode as $key => $znach) {
			$arr[]=preg_split('(.x0Aключ|.tзначение)', $znach);
		}



		$last=count($arr);
		$first =0;
		$found = false;



 		while ($found == false  ){
  
 			$middle= floor(($first + $last) / 2);
 			if($arr[$middle][1]==$value){
   				$found=true;
    			$key=$middle+1;
   				$result = " Найдено значение " . $arr[$middle][1] . " соответствующее ключу ".$key;
  			}

  		    else if ($first >= $last){
    			$result = "undef";
    			break;
  			}

   			else if ($arr[$middle][1]>$value){
   				$last = $middle - 1;
   			}

   		    else {
     			 $first = $middle + 1;
  		    }
   
		}
	}
	print_r($result);
}