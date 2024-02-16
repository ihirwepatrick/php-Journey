<!-- Creating an associative array of mixed types -->
<?php 
/* Creating an associative array of mixed types */
$arr["xyz"] = 95; 
$arr[100] = "abc"; 
$arr[11.25] = 100; 
$arr["abc"] = "pqr"; 
	
/* Looping through an array using foreach */
foreach ($arr as $key => $val){ 
	echo $key."==>".$val."\n"; 
} 
?> 
<!-- Output:
xyz==>95
100==>abc
11==>100
abc==>pqr -->