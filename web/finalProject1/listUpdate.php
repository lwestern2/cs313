<?php
require("dbConnection.php");
$db = getDb();

$listid = $_GET['list_id'];
$listdate = $_POST['date_add'];
$listname = $_POST['list'];
$listtext = $_POST['list_text'];
$do = $_POST['date_done'];

try {
$query = ("UPDATE to_do SET list = '$listname',
list_text = '$listtext', date_done = '$do', 
date_add = '$listdate' WHERE list_id = $_GET[list_id]");
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