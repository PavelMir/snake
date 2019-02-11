<?php
$enter=$argv[1];

$total=$enter*$enter;

for($a=1; $a<=$total; $a++){
$arr[]=$a;}

$arrCnunk=array_chunk($arr, $enter);

if($argv[2]==='h'){horisontal($enter, $arrCnunk);}
else{vertical($enter, $arrCnunk);}

function vertical($enter, $arrCnunk){
	for($k=0; $k<$enter; $k++){
		for($i = 0; $i<$enter; $i++) {
			if($i % 2 !=0){echo array_pop($arrCnunk[$i]).' ';}
			else{echo array_shift($arrCnunk[$i]).' ';}
	}
	echo PHP_EOL;
	}
}

function horisontal($enter, $arrCnunk){
	for($h=0; $h<$enter; $h++){
		for($s=0; $s<$enter; $s++){
			if($h % 2 !=0){echo array_pop($arrCnunk[$h]).' ';}
			else{echo array_shift($arrCnunk[$h]).' ';}	
		}
	echo PHP_EOL;}
}


