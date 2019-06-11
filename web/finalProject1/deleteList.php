<?php
require("dbConnection.php");
$db = getDb();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete To-Do List</title>
</head>

<body>
<div>
<h1>Are you sure you want to delete this?</h1>

<?php
$stmt = $db->prepare('SELECT list_id, list, list_text, date_done, date_add FROM to_do WHERE list_id = :list_id');
$stmt->bindValue(':list_id', $_GET['list_id'], PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<form id="mainForm" action="listDelete.php?list_id=<?php echo $row['list_id']; ?>" method="POST">

    <?php
        echo '<p><strong>' . $row['list'] .'</strong></p>';        
        echo '<p style="color: red;"><strong>Do by: '. $row['date_done'] . '</strong></p>';
    ?>

    <input type="submit" name="delete" value="Delete">
    <input type="button" name="cancel" value="Cancel" onClick="history.back();">
</form>