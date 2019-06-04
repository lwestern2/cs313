<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit To-Do List</title>
</head>

<body>
<div>
<h1>Edit To-do List Details</h1>

<?php 
    $stmt = $db->prepare('SELECT list_id, list, list_text, date_done, date_add FROM to_do WHERE list_id = :list_id');
    $stmt->bindValue(':list_id', $_GET['list_id'], PDO::PARAM_INT);
    $stmt->execute();
    ?>

<form id="mainForm" action="listUpdate.php" method="POST">
    <label for="list">Title:</label>
	<input type="text" id="list" name="list" value="<?php $row['list'] ?>">
	<br /><br />

	<label for="list_text">Details/Notes:</label><br>
	<textarea id="list_text" name="list_text" rows="4" cols="50" value="<?php $row['list_text'] ?>"></textarea>
	<br /><br />

	<label for="date_done">Do by:</label>
	<input type="date" id="date_done" name="date_done" value="<?php $row['date_done'] ?>">
	<br /><br />

	<label for="date_add">Date Added:</label>
    <input type="date" value="<?php $row['date_add'] ?>" id="date_add" name="date_add">
	<br /><br />

	<input type="submit" value="Update To-do List">
</form>

</div>

</body>
</html>