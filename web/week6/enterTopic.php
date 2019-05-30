<?php
include("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Topic Entry</title>
</head>

<body>
<div>

<h1>Enter A New Scripture or Topic</h1>

<form id="mainForm" action="insertTopic.php" method="POST">

	<input type="text" id="book" name="book">
	<label for="booK">Book</label>
	<br /><br />

	<input type="text" id="chapter" name="chapter">
	<label for="chapter">Chapter</label>
	<br /><br />

	<input type="text" id="verse" name="verse">
	<label for="verse">Verse</label>
	<br /><br />

	<label for="content">Content:</label><br />
	<textarea id="content" name="content" rows="4" cols="50"></textarea>
	<br /><br />

	<label>Topics:</label><br />

<?php
try
{
	$statement = $db->prepare('SELECT id, name FROM topic');
	$statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$id = $row['id'];
        $name = $row['name'];
        
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