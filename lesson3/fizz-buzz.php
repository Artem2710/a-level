<?php
function fizzBuzz(){
	$content = file('file.csv');
	foreach ($content as $string) {
	    $exp = explode(",", $string);
	}
	$i = 1;
	while ($i <= $exp[2]) {
		if(($i % $exp[0] == 0) && ($i % $exp[1] == 0)){
			echo 'FB ';
		}elseif($i % $exp[1] == 0){
			echo 'B ';
		}elseif($i % $exp[0] == 0){
			echo 'F ';
		}else{
			echo "$i ";
		}
		$i++;
	}
}
fizzBuzz();