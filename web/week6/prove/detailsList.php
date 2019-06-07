<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>To Do List Details</title>
</head>

<h3>To-Do List Details</h3>

<?php

    $stmt = $db->prepare('SELECT list_id, list, list_text, date_done, date_add FROM to_do WHERE list_id = :list_id');
    $stmt->bindValue(':list_id', $_GET['list_id'], PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo '<p><strong>' . $row['list'] .'</strong></p>';
        echo '<p>' . $row['list_text'] . '</p>';
        echo '<p style="color: red;"><strong>Do by: '. $row['date_done'] . '</strong></p>';
        echo '<p>Date Added: ' . $row['date_add'] . '</p>';

        echo '<a href="editList.php?id=' . $row['list_id'];
        echo '">Edit</a>';
?>
<br>
<a href="listView.php">View All</a>

</body>

</html>