<?php
$date = $_POST['date_add'];
$name = $_POST['hw_name'];
$text = $_POST['hw_text'];
$class = $_POST['class_code'];
$due = $_POST['due_date'];

require("dbConnection.php");
$db = getDb();

try
{
	$query = 'INSERT INTO hw(date_add, hw_name, hw_text, class_code, due_date) VALUES(:dateAdd, :hwName, :hwText, :class, :due)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':dateAdd', $date, PDO::PARAM_STR);
	$statement->bindValue(':hwName', $name, PDO::PARAM_STR);
	$statement->bindValue(':hwText', $text, PDO::PARAM_STR);
    $statement->bindValue(':class', $class, PDO::PARAM_STR);
    $statement->bindValue(':due', $due, PDO::PARAM_STR);
    $statement->execute();
    
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: index.php");

die();

?>