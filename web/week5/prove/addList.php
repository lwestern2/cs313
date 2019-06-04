<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add to To-Do List</title>
</head>

<body>
<div>
<h1>Enter to To-do List</h1>

<?php 
    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
    ?>

<form id="mainForm" action="listInsert.php" method="POST">
    <label for="list">Title:</label>
	<input type="text" id="list" name="list">
	<br /><br />

	<label for="list_text">Details/Notes</label><br>
	<textarea id="list_text" name="list_text" rows="4" cols="50"></textarea>
	<br /><br />

	<label for="date_done">Do by:</label>
	<input type="date" id="date_done" name="date_done">
	<br /><br />

	<label for="date_add">Date Added:</label>
    <input type="date" value="<?php echo $today; ?>" id="date_add" name="date_add">
	<br /><br />

	<input type="submit" value="Add to To-do List">
</form>

</div>

</body>
</html>