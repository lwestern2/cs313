<?php
require "dbConnection.php";
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Scripture Details</title>
</head>

<body>
    <div>
        <h3>Scripture Details</h3>
        <?php
            $book = $queries['book'];
            $chapter = $queries['chapter'];
            $verse = $queries['verse'];

            $stmt = $db->prepare('SELECT * FROM to_scriptures WHERE book=:book AND chapter=:chapter AND verse=:verse ');
            $stmt->bindValue(':book', $book, PDO::PARAM_STR);
            $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
            $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
            $stmt->execute();

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row){
                echo '<strong>' . $row['book'] .' '. $row['chapter'] .':'. $row['verse'];
                echo '</strong>';
                echo '<p>'.$row['content'].'</p>';
            }
        ?>
    </div>
</body>

</html>