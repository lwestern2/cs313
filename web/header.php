<?php 
$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<div class="header">
    <img src="https://www.facebook.com/photo.php?fbid=1424284017614622&set=pb.100000991112428.-2207520000.1557018463.&type=3&theater" 
    alt="Profile pictures" id="profile">
    <h2>Leah Western's Home Page</h2>
</div>

<nav class="nav">
    <ul class="nav-list">
        <li class="nav-list <?php if ($file === 'index') echo 'active' ?>"><a href="index.php" title="Home">Home</a></li>
        <li class="nav-list <?php if ($file === 'assignment') echo 'active' ?>"><a href="assignement.php" title="Assignments">View Assignments</a></li>
    </ul>
</nav>