<?php 
$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<div class="header">
    <img src="logo.jpg" alt="Dog paw print logo" id="logo">
    <h1>Dogs are Cute.Inc</h1>
</div>

<nav class="navbar nav navbar-default">
    <ul class="list">
        <li class="nav-list <?php if ($file === 'home') echo 'active' ?>"><a href="home.php" title="Home">Home</a></li>
        <li class="nav-list <?php if ($file === 'about') echo 'active' ?>"><a href="about.php" title="About Us">About
                Us</a></li>
        <li class="nav-list <?php if ($file === 'login') echo 'active' ?>"><a href="login.php" title="Login">Login</a>
        </li>
    </ul>
</nav>