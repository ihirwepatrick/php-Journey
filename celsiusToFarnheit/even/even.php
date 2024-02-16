<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $number = $_POST['number'];
    if ($number % 2 == 0) {
        echo '<button type="button"> It is an even number</button>';
    }
    ?>
</body>
</html>