<?php
include "dbConnection.php";
$db = getDb();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homework Calendar</title>
</head>

<body>
    <div>
        <h1>Calendar Resources</h1>
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
            echo '<a href="details.php?id=' . $row['hw_id'];
            echo '">View More</a>';
        }

        ?>

        <a href="addHw.php">Add Homework</a>
        </div>

        <div>
        <h2>To do</h2>

        

    </div>
</body>

</html>