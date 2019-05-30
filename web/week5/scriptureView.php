<?php
require "dbConnection.php";
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Scripture List</title>
</head>

<body>
    <div>
        <h1>Scripture Resources</h1>

        <?php
        $statement = $db->query('SELECT book, chapter, verse, content FROM scripture');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $book = $row['book'];
            $chapter = $row['chapter'];
            $verse = $row['verse'];
            $content = $row['content'];

            echo "<a><strong>$book $chapter:$verse</strong><a>";
        }

        ?>
    </div>
</body>

</html>