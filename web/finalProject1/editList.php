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
	
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>

<form id="mainForm" action="listUpdate.php?list_id=<?php echo $row['list_id']; ?>" method="POST">
    <label for="list">Title:</label>
	<input type="text" id="list" name="list" value="<?php echo $row['list']; ?>">
	<br /><br />

	<label for="list_text">Details/Notes:</label><br>
	<textarea id="list_text" name="list_text" rows="4" cols="50"><?php echo $row['list_text']; ?></textarea>
	<br /><br />

	<label for="date_done">Do by:</label>
	<input type="date" id="date_done" name="date_done" value="<?php echo $row['date_done']; ?>">
	<br /><br />

	<label for="date_add">Date Added:</label>
    <input type="date" value="<?php echo $row['date_add']; ?>" id="date_add" name="date_add">
	<br /><br />

	<input type="submit" name="save" value="Save">
	<input type="button" name="cancel" value="Cancel" onClick="history.back();">
</form>

</div>

</body>
</html>