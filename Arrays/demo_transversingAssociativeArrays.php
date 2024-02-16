<?php 
	
/* Creating an associative array */
$student_one = array("Maths"=>95, "Physics"=>90, 
				"Chemistry"=>96, "English"=>93, 
				"Computer"=>98); 
	
	
/* Looping through an array using foreach */
echo "Looping using foreach: \n"; 
foreach ($student_one as $subject => $marks){ 
	echo "Student one got ".$marks." in ".$subject."\n"; 
} 

/* Looping through an array using for */
echo "\nLooping using for: \n"; 
$subject = array_keys($student_one); 
$marks = count($student_one); 
	
for($i=0; $i < $marks; ++$i) { 
	echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n"; 
} 
?> 
<!-- Output:
Looping using foreach: 
Student one got 95 in Maths
Student one got 90 in Physics
Student one got 96 in Chemistry
Student one got 93 in English
Student one got 98 in Computer

Looping using for: 
Maths 95
Physics 90
Chemistry 96
English 93
Computer 98 -->