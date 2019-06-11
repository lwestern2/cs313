<?php 
include 'functions.php'; 
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Homework Calendar</title>
    <meta charset="utf-8">

<style>
.yui3-button {
    margin:10px 0px 10px 0px;
    color: #fff;
    background-color: #3476b7;
}
</style>

<div id="demo" class="yui3-skin-sam yui3-g"> <!-- You need this skin class -->

  <div id="leftcolumn" class="yui3-u">
     <div id="mycalendar"></div>
  </div>
  <div id="rightcolumn" class="yui3-u">
   <div id="links" style="padding-left:20px;">
      Events on: <span id="selecteddate"></span>
   </div>
  </div>
</div>

<script type="text/javascript">
YUI().use('calendar', 'datatype-date', 'cssbutton',  function(Y) {
    var calendar = new Y.Calendar({
      contentBox: "#mycalendar",
      width:'340px',
      showPrevMonth: true,
      showNextMonth: true,
      date: new Date()}).render();

    var dtdate = Y.DataType.Date;

    calendar.on("selectionChange", function (ev) {
      var newDate = ev.newSelection[0];

      Y.one("#selecteddate").setHTML(dtdate.format(newDate));
    });
});
</script>

</html>