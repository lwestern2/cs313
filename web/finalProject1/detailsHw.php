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

<h3 class="heading">Homework Details for <?php echo $row['hw_name']; ?></h3>

<?php

    $stmt = $db->prepare('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw WHERE hw_id=:hw_id');
    $stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo '<p><strong>' . $row['class_code'] .': '. $row['hw_name'] . '</strong></p>';
        echo '<p>' . $row['hw_text'] . '</p>';
        echo '<p style="color: red;"><strong>Due: '. $row['due_date'] . '</strong></p>';
        echo '<p>Date Added: ' . $row['date_add'] . '</p>';

        echo '<a class="btn" href="editHw.php?hw_id=' . $row['hw_id'];
        echo '">Edit</a>';

        echo '<a class="btn" href="deleteHw.php?hw_id=' . $row['hw_id'];
        echo '">Delete</a>';
    
?>
<br>
<a class="btn" href="listView.php">View All</a>

</body>

</html>

<!--
// require("dbConnection.php");
// $db = getDb();
// ?>

<!DOCTYPE html>
<html>

<head>
    <title>Homework Details</title>
</head>

<h3>Homework Details</h3>

<?php
    // $hw_id = htmlspecialchars($_GET['hw_id']);

    // $stmt = $db->prepare('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw WHERE hw_id = :hw_id');
    // $stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
    // $stmt->execute();

    // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC));

    // foreach ($rows as $row) {
    //     $id = $row['hw_id'];
    //     $date = $row['date_add'];
    //     $name = $row['hw_name'];
    //     $text = $row['hw_text'];
    //     $class = $row['class_code'];
    //     $due = $row['due_date'];

    //     echo "<p><strong>$class: $name</strong></p>";
    //     echo "<p>$text</p>";
    //     echo "<p style='color: red;'><strong>Due: $due</strong></p>";
    //     echo "<p>Date Added: $date</p>";

    //     echo '<a href="editHw.php?id=$id';
    //     echo '">Edit</a>';
    // }  
    
    // $stmt->bindValue(':date_add', $date);
    // $stmt->bindValue(':hw_name', $name);
    // $stmt->bindValue(':hw_text', $text);
    // $stmt->bindValue(':class_code', $class);
    // $stmt->bindValue(':due_date', $due);

    //     echo '<p><strong>' . $row['class_code'] .': ' . $row['hw_name']. '</strong></p>';
    //     echo '<p>' . $row['hw_text']. '</p>';
    //     echo '<p style="color: red;"><strong>Due: ' . $row['due_date'] . '</strong></p>';
    //     echo '<p>Date Added: ' . $row['date_add'] . '</p>';

    //     echo '<a href="editHw.php?id=' . $row['hw_id'];
    //     echo '">Edit</a>';
?>
<br>
<a href="listView.php">View All</a>

</body>

</html>