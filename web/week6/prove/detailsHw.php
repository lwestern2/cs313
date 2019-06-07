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

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
        // $id = $row['hw_id'];
        // $date = $row['date_add'];
        // $name = $row['hw_name'];
        // $text = $row['hw_text'];
        // $class = $row['class_code'];
        // $due = $row['due_date'];

    foreach ($rows as $row) {
        echo '<p><strong>' . $row['class_code'] .': ' . $row['hw_name']. '</strong></p>';
        echo '<p>' . $row['hw_text']. '</p>';
        echo "<p style='color: red;'><strong>Due: $due</strong></p>";
        echo "<p>Date Added: $date</p>";

        echo '<a href="editHw.php?id=' . $row['hw_id'];
        echo '">Edit</a>';
    }
?>
<br>
<a href="listView.php">View All</a>

</body>

</html>