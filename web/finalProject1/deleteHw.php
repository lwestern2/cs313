<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Homework Assignment</title>
</head>

<body>
<div>

<?php
$stmt = $db->prepare('SELECT hw_id, date_add, hw_name, hw_text, class_code, due_date FROM hw WHERE hw_id = :hw_id');
$stmt->bindValue(':hw_id', $_GET['hw_id'], PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<h3 class="heading">Are you sure you want to delete <?php echo $row['hw_name']; ?></h3>

<form id="mainForm" action="hwDelete.php?hw_id=<?php echo $row['hw_id']; ?>" method="POST">

    <?php
        echo '<p><strong>' . $row['class_code'] .': '. $row['hw_name'] . '</strong></p>';
        echo '<p style="color: red;"><strong>Due: '. $row['due_date'] . '</strong></p>';
    ?>

    <input class="btn-danger form" type="submit" name="delete" value="Delete">
    <input class="btn-cancel form" type="button" name="cancel" value="Cancel" onClick="history.back();">
</form>