<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<link rel="stylesheet" href="process.css">
<body>
	<?php
		$n1 = $_POST['n1'];
		$cat1 = $_POST['cat1'];
		$exam1 = $_POST['exam1'];
		$m1 = ($cat1 + $exam1) / 2;

		$n2 = $_POST['n2'];
		$cat2 = $_POST['cat2'];
		$exam2 = $_POST['exam2'];
		$m2 = ($cat2 + $exam2) / 2;

		$class = $_POST['class'];

		// Calculate percentage and grade for student 1
		$percentage1 = ($m1 / 100) * 100;
		if ($percentage1 >= 90) {
			$grade1 = 'A+';
		} elseif ($percentage1 >= 80) {
			$grade1 = 'A';
		} elseif ($percentage1 >= 70) {
			$grade1 = 'B+';
		} elseif ($percentage1 >= 60) {
			$grade1 = 'B';
		} elseif ($percentage1 >= 50) {
			$grade1 = 'C';
		} else {
			$grade1 = 'F';
		}

		// Calculate percentage and grade for student 2
		$percentage2 = ($m2 / 100) * 100;
		if ($percentage2 >= 90) {
			$grade2 = 'A+';
		} elseif ($percentage2 >= 80) {
			$grade2 = 'A';
		} elseif ($percentage2 >= 70) {
			$grade2 = 'B+';
		} elseif ($percentage2 >= 60) {
			$grade2 = 'B';
		} elseif ($percentage2 >= 50) {
			$grade2 = 'C';
		} else {
			$grade2 = 'F';
		}
	?>

	<table style="border: solid 5px #242424">
		<tr>
			<th>Name</th>
			<th>Reg. No.</th>
			<th>CAT</th>
			<th>Exam</th>
			<th>Marks</th>
			<th>Class</th>
			<th>Percentage</th>
			<th>Grade</th>
		</tr>
		<tr>
			<td><?php echo $n1; ?></td>
			<td><?php echo $_POST['regNo']; ?></td>
			<td><?php echo $cat1; ?></td>
			<td><?php echo $exam1; ?></td>
			<td><?php echo $m1; ?></td>
			<td><?php echo $class; ?></td>
			<td><?php echo $percentage1 . '%'; ?></td>
			<td><?php echo $grade1; ?></td>
		</tr>
		<tr>
			<td><?php echo $n2; ?></td>
			<td><?php echo $_POST['regNo']; ?></td>
			<td><?php echo $cat2; ?></td>
			<td><?php echo $exam2; ?></td>
			<td><?php echo $m2; ?></td>
			<td><?php echo $class; ?></td>
			<td><?php echo $percentage2 . '%'; ?></td>
			<td><?php echo $grade2; ?></td>
		</tr>
	</table>
</body>
</html>