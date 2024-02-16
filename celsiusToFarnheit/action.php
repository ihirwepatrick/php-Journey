<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cel = $_POST['cels'];
$far = ($cel * 1.8) + 32;
echo 'The Fahrenheit value is ' . $far;
if ($cel==0) {
    echo 'The starting point';
}
?>
</body>
</html>