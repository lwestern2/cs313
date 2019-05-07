<!doctype html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <title id="page-title">HTML Form</title>
  <meta name="description" content="Leah Western Home page">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<h1>Practice Form</h1>
<form action="form.php" method="post"> 
 <label for="name">Name:</label>
 <input type="text" name="name"> <br>
 <label for="email">Email:</label>
 <input type="text" name="email"> <br>

 <label for="major">Select major</label><br>
 <?php 
 $majorArray = array("CS"=>"Computer Science", "WDD"=>"Web Design & Development","CIT"=>"Computer Information Technology","CE"=>"Computer Engineering");

 foreach($majorArray as $m =>$m_value) {
    echo '<input type="radio" name="major" value="' . $m .'"> '. $m_value . '<br>';
 }
 
 ?>

<input type="checkbox" name="continent[]" value="NA"> North America <br>
<input type="checkbox" name="continent[]" value="SA"> South America <br>
<input type="checkbox" name="continent[]" value="EU"> Europe <br>
<input type="checkbox" name="continent[]" value="AS"> Asia <br>
<input type="checkbox" name="continent[]" value="AU"> Australia <br>
<input type="checkbox" name="continent[]" value="AF"> Africa <br>
<input type="checkbox" name="continent[]" value="AN"> Antarctica <br>

<label for="name">Comments:</label><br>
 <textarea name="comments" id="comments" cols="30" rows="5"></textarea><br>
 
<input type="submit"> 
</form>
</body>