<?php
$_n1= $_POST['firstNumber'];
$_n2=$_POST['secondNumber'];
$_operation=$_POST['operation'];
$_result=$_POST['result'];

switch($operation) {
case '+':
    $_result = $_n1 + $_n2;
    break;
case '-':
    $_result = $_n1 - $_n2;
case '*':
    $_result = $_n1 * $_n2;
case '/':
    $_result = $_n1 / $_n2;
}
?>