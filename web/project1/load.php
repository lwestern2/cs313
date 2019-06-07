<?php
require("dbConnection.php");
$db = getDb();

$data = array();

$query = "SELECT * FROM hw ORDER BY hw_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'hw_id'   => $row["hw_id"],
  'hw_name'   => $row["hw_name"],
  'hw_text'   => $row["hw_text"],
  'class_code'   => $row["class_code"],
  'date_add'   => $row["date_add"],
  'due_date'   => $row["due_date"]
 );
}

echo json_encode($data);

?>