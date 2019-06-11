<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homework Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$stmt = $db->prepare('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw WHERE hw_id=:hw_id');
$stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h3 class="heading">Homework Details for <?php echo $row['hw_name']; ?></h3>

<?php

        echo '<p><strong>' . $row['class_code'] .': '. $row['hw_name'] . '</strong></p>';
        echo '<p>' . $row['hw_text'] . '</p>';
        echo '<p style="color: red;"><strong>Due: '. $row['due_date'] . '</strong></p>';
        echo '<p>Date Added: ' . $row['date_add'] . '</p>';

        echo '<a class="btn" href="editHw.php?hw_id=' . $row['hw_id'];
        echo '">Edit</a>';

        echo '<a class="btn-danger" href="deleteHw.php?hw_id=' . $row['hw_id'];
        echo '">Delete</a>';
    
?>
<br>
<a class="btn" href="listView.php">View All</a>

</body>

</html>