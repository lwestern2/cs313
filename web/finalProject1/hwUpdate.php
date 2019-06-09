<?php
require("dbConnection.php");
$db = getDb();

$hwid = $_POST['hw_id'];
$hwdate = $_POST['date_add'];
$hwname = $_POST['hw_name'];
$hwtext = $_POST['hw_text'];
$class = $_POST['class_code'];
$due = $_POST['due_date'];

echo "ID: " . $_POST['hw_id'];

try {
$query = ("UPDATE hw SET class_code = '$class',
hw_name = '$hwname', hw_text = '$hwtext',
due_date = '$due', date_add = '$hwdate' WHERE hw_id = $hwid");
$stmt = $db->prepare($query);
$stmt->execute();
}

catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: listView.php");

die();
?>