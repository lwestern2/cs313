<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homework Calendar</title>
    <link rel="stylesheet" href="style.css">
    <script src="functions.js"></script>
</head>

<body>
    <button class="collapsible">Homework</button>
    <div class="content">

        <?php
        $statement = $db->query('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw ORDER BY due_date ASC');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['hw_id'];
            $date = $row['date_add'];
            $name = $row['hw_name'];
            $text = $row['hw_text'];
            $class = $row['class_code'];
            $due = $row['due_date'];

            echo "<div class='content'>";
            echo '<a class="details-btn" href="detailsHw.php?hw_id=' . $row['hw_id'];
            echo '">View Details...</a>';
            echo "<p><strong>$class: $name</strong></p>";
            echo "<p>Due: $due</p>";
            echo "<hr>";
            echo "</div>";
        }

        ?>
        </div>
        <br>
        <a class="add-btn" href="addHw.php">Add Homework</a>

        <div>
        <button class="collapsible">To-Do</button>

        <?php
        $statement = $db->query('SELECT list_id, list, list_text, date_done, date_add FROM to_do ORDER BY date_done ASC');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['list_id'];
            $name = $row['list'];
            $text = $row['list_text'];
            $done = $row['date_done'];
            $add = $row['date_add'];

            echo "<div class='content'>";
            echo '<a class="details-btn" href="detailsList.php?list_id=' . $row['list_id'];
            echo '">View More</a>';
            echo "<p><strong>$name</strong></p>";
            echo "<p>Do by: $done</p>";
            echo "<hr>";
            echo "</div>";
        }

        ?>

        <br>
        <a class="add-btn" href="addList.php">Add to List</a>

    </div>
</body>

</html>