<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $email = $major = $comments = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            echo "Name is Required.";
        }
        else {
            $name = ($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            echo "Email is Required.";
        }
        else {
            $email = ($_POST["email"]);
        }

        if (empty($_POST["major"])) {
            echo "Major is Required.";
        }
        else {
            $major = ($_POST["major"]);
        }

            $comments = ($_POST["comments"]);
        
    }
    ?>
</body>
</html>