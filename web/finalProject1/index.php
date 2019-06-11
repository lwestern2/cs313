<?php 
include 'functions.php'; 
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Homework Calendar</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
</body>

</html>