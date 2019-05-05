<?php 
$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<nav class="nav">
    <ul class="nav-list">
        <li class="nav-item <?php if ($file === 'index') echo 'active' ?>"><a href="index.php" title="Home">Home</a></li>
        <li class="nav-item <?php if ($file === 'assignment') echo 'active' ?>"><a href="assignment.php" title="Assignments">View Assignments</a></li>
    </ul>
</nav>