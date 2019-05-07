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
 <input type="radio" name="major" value="Computer Science"> Computer Science <br>
 <input type="radio" name="major" value="WDD"> WDD <br>
 <input type="radio" name="major" value="CIT"> CIT<br>
 <input type="radio" name="major" value="Computer Engineering"> Computer Engineering <br>

 <label for="name">Comments:</label><br>
 <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br>

<input type="checkbox" name="continent" value="North America"> North America <br>
<input type="checkbox" name="continent1" value="South America"> South America <br>
<input type="checkbox" name="continent2" value="Europe"> Europe <br>
<input type="checkbox" name="continent3" value="Asia"> Asia <br>
<input type="checkbox" name="continent4" value="Australia"> Australia <br>
<input type="checkbox" name="continent5" value="Africa"> Africa <br>
<input type="checkbox" name="continent6" value="Antarctica"> Antarctica <br>

<input type="submit"> 
</form>
</body>