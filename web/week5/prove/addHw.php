<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Scripture</title>
</head>

<body>
<div>

<h1>Enter A New Scripture and Topic</h1>

<form id="mainForm" action="topicInsert.php" method="POST">
	<label for="booK">Book</label>
	<input type="text" id="book" name="book">
	<br /><br />

	<label for="chapter">Chapter</label>
	<input type="text" id="chapter" name="chapter">
	<br /><br />

	<label for="verse">Verse</label>
	<input type="text" id="verse" name="verse">
	<br /><br />

	<label for="content">Content:</label><br />
	<textarea id="content" name="content" rows="4" cols="50"></textarea>
	<br /><br />

	<label>Topics:</label><br />

<?php
try
{
	$statement = $db->prepare('SELECT id, topic_name FROM topic');
	$statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$id = $row['id'];
        $name = $row['topic_name'];
        
		echo "<input type='checkbox' name='topics[]' id='topics$id' value='$id'>";
		
		echo "<label for='topics$id'>$name</label><br />";
        echo "\n";
	}
}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>

	<br />

	<input type="submit" value="Add to Database" />

</form>


</div>

</body>
</html>