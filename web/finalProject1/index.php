<?php
// include "dbConnection.php";
// $db = getDb();

// session_start();
// if (isset($_SESSION['username']))
// {
// 	$username = $_SESSION['username'];
// }
// else
// {
// 	header("Location: signIn.php");
// 	die();
// }
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Homework Calendar</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <script src="functions.js"></script>
</head>

<body class="main">
<h1>Homework & To-Do List Calendar</h1>

<div class="body">
<div class="events">
<?php
include 'listView.php';
?>

</div>
<div class="calendar">
<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
            June<br>
            <span style="font-size:20px">2019</span>
        </li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
    <li>12</li>
    <li>13</li>
    <li>14</li>
    <li>15</li>
    <li>16</li>
    <li>17</li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
    <li>21</li>
    <li>22</li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
</ul>
</div>
</div>

</body>

</html>