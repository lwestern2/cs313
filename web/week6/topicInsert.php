<?php
$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];
$topic = $_POST['topics'];

require("dbConnection.php");
$db = getDb();

try
{
	$query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':book', $book, PDO::PARAM_STR);
	$statement->bindValue(':chapter', $chapter, PDO::PARAM_INT);
	$statement->bindValue(':verse', $verse, PDO::PARAM_INT);
	$statement->bindValue(':content', $content, PDO::PARAM_STR);
    $statement->execute();
    
    $scriptureId = $db->lastInsertId("scripture_id_seq");
    
	foreach ($topic as $topicId)
	{
		echo "ScriptureId: $scriptureId, topicId: $topicId";
		$statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');
		$statement->bindValue(':scriptureId', $scriptureId, PDO::PARAM_INT);
		$statement->bindValue(':topicId', $topicId, PDO::PARAM_INT);
		$statement->execute();
	}
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

// header("Location: showTopic.php");

die();

?>