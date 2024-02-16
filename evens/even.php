
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $sum = $number1 + $number2;
    $answer;
    if ($sum % 2 == 0) {
        $answer = $number1 * $number2;
        echo 'The product is: '.$answer;
    } else {
        $answer = $sum;
        echo 'The sum is: '.$answer;
    }
    ?>
</body>
</html>