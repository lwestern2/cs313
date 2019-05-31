<?php
include("dbConnection.php");
$db = getDb();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scripture and Topic List</title>
</head>

<body>
<div>

<h1>Scripture and Topic</h1>

<?php
try
{
	$statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scripture');
    $statement->execute();
    
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
		echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
		echo '<br />';
		echo 'Topics: ';

        $stmtTopics = $db->prepare('SELECT topic_name FROM topic t'
			. ' INNER JOIN scripture_topic st ON st.topicId = t.id'
			. ' WHERE st.scriptureId = :scriptureId');
		$stmtTopics->bindValue(':scriptureId', $row['id'], PDO::PARAM_INT);
        $stmtTopics->execute();
        
		while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
		{
			echo $topicRow['topic_name'] . ' ';
		}
		echo '</p>';
	}
}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
?>

</div>
<a href="enterScript.php">Add New Scripture</a>

</body>
</html>