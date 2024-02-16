<!-- A function is a block of code written in a program to perform some specific task. We can relate functions in programs to employees in a office in real life for a better understanding of how functions work. Suppose the boss wants his employee to calculate the annual budget. So how will this process complete? The employee will take information about the statistics from the boss, performs calculations and calculate the budget and shows the result to his boss. Functions works in a similar manner. They take informations as parameter, executes a block of statements or perform operations on this parameters and returns the result. 
PHP provides us with two major types of functions: 
 

Built-in functions : PHP provides us with huge collection of built-in library functions. These functions are already coded and stored in form of functions. To use those we just need to call them as per our requirement like, var_dump, fopen(), print_r(), gettype() and so on.
User Defined Functions : Apart from the built-in functions, PHP allows us to create our own customised functions called the user-defined functions. 
Using this we can create our own packages of code and use it wherever necessary by simply calling it.
 

Why should we use functions?

 

Reusability: If we have a common code that we would like to use at various parts of a program, we can simply contain it within a function and call it whenever required. This reduces the time and effort of repetition of a single code. This can be done both within a program and also by importing the PHP file, containing the function, in some other program
Easier error detection: Since, our code is divided into functions, we can easily detect in which function, the error could lie and fix them fast and easily.
Easily maintained: As we have used functions in our program, so if anything or any line of code needs to be changed, we can easily change it inside the function and the change will be reflected everywhere, where the function is called. Hence, easy to maintain.
 

Creating a Function

While creating a user defined function we need to keep few things in mind: 
 

Any name ending with an open and closed parenthesis is a function.
A function name always begins with the keyword function.
To call a function we just need to write its name followed by the parenthesis
A function name cannot start with a number. It can start with an alphabet or underscore.
A function name is not case-sensitive.
Syntax: 
 

function function_name(){
    executable code;
} -->

<?php

// function along with three parameters
function proGeek($num1, $num2, $num3) 
{
	$product = $num1 * $num2 * $num3;
	
	return $product; //returning the product
}

// storing the returned value
$retValue = proGeek(2, 3, 5);
echo "The product is $retValue";

?>
