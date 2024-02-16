<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$myNum = 5;
$result = ++$myNum + $myNum++;
$nm1 = $_POST['nm1'];
$reg1 = $_POST['reg1']; 
$cat1 = $_POST['cat1'];
$exam1 = $_POST['exam1'];
$totalMarks = ($cat1 + $exam1) /2;
$percentage1 = $totalMarks/100 *100;
echo "$nm1 hhhhhh";
?>
<div class="">
    <table>
        <tr>
        <th>Name</th>
                    <th>Reg. No.</th>
                    <th>CAT</th>
                    <th>Exam</th> 
                    <th> Percentage</th>
        </tr>
        <tr>
            <td><?php echo $nm1; ?></td>
            <td><?php echo $reg1; ?></td>
            <td><?php echo $cat1; ?></td>
            <td><?php echo $exam1; ?></td>
            <td><?php echo $percentage1; ?></td>

        </tr>
    </table>
</div>
<?php echo $myNum; ?>
</body>
</html>
