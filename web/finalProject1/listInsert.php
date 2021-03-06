<?php
$date = $_POST['date_add'];
$name = $_POST['list'];
$text = $_POST['list_text'];
$do = $_POST['date_done'];

require("dbConnection.php");
$db = getDb();

try
{
	$query = 'INSERT INTO to_do(list, list_text, date_done, date_add) VALUES(:list, :listText, :do, :dateAdd)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':dateAdd', $date, PDO::PARAM_STR);
	$statement->bindValue(':list', $name, PDO::PARAM_STR);
	$statement->bindValue(':listText', $text, PDO::PARAM_STR);
    $statement->bindValue(':do', $do, PDO::PARAM_STR);
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