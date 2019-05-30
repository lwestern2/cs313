<?php
    include "dbConnection.php";
    $db = getDb();

    $statement = $db->query('SELECT book, chapter, verse, content FROM scripture');
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $book = $row['book'];
        $chapter = $row['chapter'];
        $verse = $row['verse'];
        $content = $row['content'];

    $stmt = $db->prepare('SELECT * FROM scripture WHERE book=:book AND chapter=:chapter AND verse=:verse ');
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