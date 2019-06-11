<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>To Do List Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$stmt = $db->prepare('SELECT list_id, list, list_text, date_done, date_add FROM to_do WHERE list_id = :list_id');
$stmt->bindValue(':list_id', $_GET['list_id'], PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h3 class="heading">List Details for <?php echo $row['list']; ?></h3>

<?php

        echo '<p><strong>' . $row['list'] .'</strong></p>';
        echo '<p>' . $row['list_text'] . '</p>';
        echo '<p style="color: red;"><strong>Do by: '. $row['date_done'] . '</strong></p>';
        echo '<p>Date Added: ' . $row['date_add'] . '</p>';

        echo '<a class="btn" href="editList.php?list_id=' . $row['list_id'];
        echo '">Edit</a>';

        echo '<a class="btn-danger" href="deleteList.php?list_id=' . $row['list_id'];
        echo '">Delete</a>';
?>
<br>
<br>
<a class="btn" href="index.php">View All</a>

</body>

</html>