<?php 
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Homework Calendar</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <div id="calendar"></div>
    <script src="functions.js"></script>
</head>

<div class="container" id="main">
    <div class="jumbotron">
        <h1 class="text-center">
            <a id="left" href="#"><i class="fa fa-chevron-left"> </i></a>
            <span>&nbsp;</span><span id="month"> </span><span>&nbsp;</span>
            <span id="year"> </span><span>&nbsp;</span><a id="right" href="#"><i class="fa fa-chevron-right"> </i></a>
        </h1>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <table class="table"></table>
        </div>
    </div>
</div>

</html>