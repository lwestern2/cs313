<!doctype html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title id="page-title">HTML Form</title>
    <meta name="description" content="Leah Western Home page">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>

<body>
    <h1>Practice Form</h1>
    <form action="form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"> 
        <span class="error">* <?php echo $nameErr;?></span>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email"> 
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>

        <fieldset id="major">
        <label for="major">Select major</label><br>
        <?php 
            $majorArray = array("CS"=>"Computer Science", "WDD"=>"Web Design & Development","CIT"=>"Computer Information Technology","CE"=>"Computer Engineering");

            foreach($majorArray as $m =>$m_value) {
                echo '<input type="radio" name="major" value="' . $m .'"> '. $m_value . '<br>';
            }
 
        ?>
        </fieldset>
        <br>

        <fieldset id="check">
        <label for="continent">Which continents have you been to?</label><br>
        <input type="checkbox" name="continent[]" value="NA"> North America <br>
        <input type="checkbox" name="continent[]" value="SA"> South America <br>
        <input type="checkbox" name="continent[]" value="EU"> Europe <br>
        <input type="checkbox" name="continent[]" value="AS"> Asia <br>
        <input type="checkbox" name="continent[]" value="AU"> Australia <br>
        <input type="checkbox" name="continent[]" value="AF"> Africa <br>
        <input type="checkbox" name="continent[]" value="AN"> Antarctica <br>
        </fieldset>
        <br>

        <label for="name">Comments:</label><br>
        <textarea name="comments" id="comments" cols="30" rows="5"></textarea><br>

        <input type="submit">
    </form>
</body>

</html>