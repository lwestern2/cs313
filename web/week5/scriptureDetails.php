<?php
    include "dbConnection.php";
    $db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Scripture Details</title>
</head>

<body>
    <div>
        <h1>Scripture Details</h1>

<?php


    $statement = $db->query('SELECT id, book, chapter, verse, content FROM scripture WHERE id =' . $_GET['id']);
    // $statement->execute();

    // $stmt = $db->prepare('SELECT * FROM scripture WHERE id = :id');
    // $stmtTopics->bindValue(':id', $row['id']);
    // $stmt->bindValue(':book', $book, PDO::PARAM_STR);
    // $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
    // $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
    // $stmt->execute();

    $rows = $statement->fetch(PDO::FETCH_ASSOC);

        echo '<strong>' . $row['book'] .' '. $row['chapter'] .':'. $row['verse'];
        echo '</strong>';
        echo '<p>'.$row['content'].'</p>';
?>

<a href="scriptureView.php">View All</a>
</div>
</body>
</html>