<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Homework</title>
</head>

<body>
<div>
<h1>Edit Homework Details</h1>

<?php
$stmt = $db->prepare('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw WHERE hw_id = :hw_id');
$stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<form id="mainForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <label for="class_code">Class:</label>
	<input type="text" id="class_code" name="class_code" value="<?php echo $row['class_code']; ?>">
	<br /><br />

	<label for="hw_name">Assignment Title:</label>
	<input type="text" id="hw_name" name="hw_name" value="<?php echo $row['hw_name']; ?>">
	<br /><br />

	<label for="hw_text">Instructions:</label><br>
	<textarea id="hw_text" name="hw_text" rows="4" cols="50"><?php echo $row['hw_text']; ?></textarea>
	<br /><br />

	<label for="due_date">Due Date:</label>
	<input type="date" id="due_date" name="due_date" value="<?php echo $row['due_date']; ?>">
	<br /><br />

	<label for="date_add">Date Added:</label>
    <input type="date" value="<?php echo $row['date_add']; ?>" id="date_add" name="date_add">
	<br /><br />

	<input type="submit" value="Update Homework Assignment">
</form>

<?php
$stmt = $db->prepare('UPDATE hw SET class_code = $_POST[class_code],
hw_name = $_POST[hw_name], hw_text = $_POST[hw_text],
due_date = $_POST[due_date], date_add = $_POST[date_add] WHERE hw_id=:hw_id');

$stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
$stmt->execute();

if($stmt) {
	echo "Done";
}
?>

</div>

</body>
</html>