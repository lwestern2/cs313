<?php
require("dbConnection.php");
$db = getDb();

try {
$query = ("DELETE FROM hw WHERE hw_id = $_GET[hw_id]");
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