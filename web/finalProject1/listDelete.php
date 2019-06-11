<?php
require("dbConnection.php");
$db = getDb();

try {
$query = ("DELETE FROM to_do WHERE list_id = $_GET[list_id]");
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