<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Homework</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<div>
<h3 class="heading">Enter A New Homework Assignment</h3>

<?php 
    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
    ?>

<form id="mainForm" action="hwInsert.php" method="POST">
    <label for="class_code">Class:</label>
	<input type="text" id="class_code" name="class_code">
	<br /><br />

	<label for="hw_name">Assignment Title:</label>
	<input type="text" id="hw_name" name="hw_name">
	<br /><br />

	<label for="hw_text">Instructions:</label><br>
	<textarea id="hw_text" name="hw_text" rows="4" cols="50"></textarea>
	<br /><br />

	<label for="due_date">Due Date:</label>
	<input type="date" id="due_date" name="due_date">
	<br /><br />

	<label for="date_add">Date Added:</label>
    <input type="date" value="<?php echo $today; ?>" id="date_add" name="date_add">
	<br /><br />

	<input class="btn" type="submit" value="Add Homework Assignment">
	<input class="btn-cancel form" type="button" name="cancel" value="Cancel" onClick="history.back();">
</form>

</div>

</body>
</html>