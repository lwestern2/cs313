
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submited</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
    <?php
    $name = $email = $major = $comments = "";
    $nameErr = $emailErr = $majorErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is Required. <br>";
        }
        else {
            $name = ($_POST["name"]);
            echo "User Name: $name <br>";
        }

        if (empty($_POST["email"])) {
            echo "Email is Required. <br>";
        }
        else {
            $email = ($_POST["email"]);
            $emailLink = 'Email: <a href="mailto:' . $email . '">' . $email . '</a><br>';
            echo "$emailLink";
        }

        if (empty($_POST["major"])) {
            echo "Major is Required. <br>";
        }
        else {
            $major = ($_POST["major"]);
            echo "Major: $major <br>";
        }

        echo "Continents Visited: <br>";
        $a=array("NA"=>"North America", "SA"=>"South America", "EU"=>"Europe", "AS"=>"Asia", "AU"=>"Australia", "AF"=>"Africa", "AN"=>"Antarctica");
        foreach($_POST['continent'] as $value) {
            echo $a[$value] . "<br>";
        }

        $comments = ($_POST["comments"]);
        echo "Comments: $comments";
    }
    ?>
</body>
</html>