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
 <input type="radio" name="major" value="computerScience">Computer Science <br>
 <input type="radio" name="major" value="wdd">WDD <br>
 <input type="radio" name="major" value="cit">Computer Information Technology<br>
 <input type="radio" name="major" value="computerEngineering">Computer Engineering <br>

 <label for="name">Comments:</label><br>
 <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
</form>
</body>