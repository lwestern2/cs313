<?php
require("dbConnection.php");
$db = getDb();

$hwid = $_GET['hw_id'];
$hwdate = $_POST['date_add'];
$hwname = $_POST['hw_name'];
$hwtext = $_POST['hw_text'];
$class = $_POST['class_code'];
$due = $_POST['due_date'];

echo "ID: $hwid";

try {
$query = ("UPDATE hw SET class_code = '$class',
hw_name = '$hwname', hw_text = '$hwtext',
due_date = '$due', date_add = '$hwdate' WHERE hw_id = $_GET[hw_id]");
$stmt = $db->prepare($query);
$stmt->execute();
}

catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: index.php");

die();
?>