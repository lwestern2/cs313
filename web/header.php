<?php 
$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<div class="header">
    <h2>- Leah Western -</h2>
    <img id="bg-image" src="C:\Users\leahb\Google Drive\Leah's Pictures\2015\Senior Year (Everything)\Senior Photos\Final Photos" alt="Leah Western">
</div>

<nav class="nav">
    <ul class="nav-list">
        <li class="nav-list <?php if ($file === 'index') echo 'active' ?>"><a href="index.php" title="Home">Home</a></li>
        <li class="nav-list <?php if ($file === 'assignment') echo 'active' ?>"><a href="assignement.php" title="Assignments">View Assignments</a></li>
    </ul>
</nav>