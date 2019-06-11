<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homework Calendar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2>Homework</h2>

        <?php
        $statement = $db->query('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['hw_id'];
            $date = $row['date_add'];
            $name = $row['hw_name'];
            $text = $row['hw_text'];
            $class = $row['class_code'];
            $due = $row['due_date'];

            echo "<p><strong>$class: $name</strong></p>";
            echo "<p>Due: $due</p>";
            echo '<a class="details-btn" href="detailsHw.php?hw_id=' . $row['hw_id'];
            echo '">View Details</a>';
        }

        ?>
        <br>
        <a href="addHw.php">Add Homework</a>
        </div>

        <div>
        <h2>To do</h2>

        <?php
        $statement = $db->query('SELECT list_id, list, list_text, date_done, date_add FROM to_do');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['list_id'];
            $name = $row['list'];
            $text = $row['list_text'];
            $done = $row['date_done'];
            $add = $row['date_add'];

            echo "<p><strong>$name</strong></p>";
            echo "<p>Do by: $done</p>";
            echo '<a href="detailsList.php?list_id=' . $row['list_id'];
            echo '">View More</a>';
        }

        ?>

        <br>
        <a href="addList.php">Add to List</a>

    </div>
</body>

</html>