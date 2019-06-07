<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homework Details</title>
</head>

<h3>Homework Details</h3>

<?php

    $stmt = $db->prepare('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw WHERE hw_id = :hw_id');
    $stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo '<p><strong>' . $row['class_code'] .': '. $row['hw_name'] . '</strong></p>';
        echo '<p>' . $row['hw_text'] . '</p>';
        echo '<p style="color: red;"><strong>Due: '. $row['due_date'] . '</strong></p>';
        echo '<p>Date Added: ' . $row['date_add'] . '</p>';

        echo '<a href="editHw.php?id=$id';
        echo '">Edit</a>';
?>

<a href="listView.php">View All</a>

</body>

</html>