
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
            echo "User Name: $name <br>";
        }

        if (empty($_POST["email"])) {
            echo "Email is Required.";
        }
        else {
            $email = ($_POST["email"]);
            $emailLink = 'Email: <a href="mailto:' . $email . '">' . $email . '</a><br>';
            echo "$emailLink";
        }

        if (empty($_POST["major"])) {
            echo "Major is Required.";
        }
        else {
            $major = ($_POST["major"]);
            echo "Major: $major <br>";
        }

        $comments = ($_POST["comments"]);
        echo "Comments: $comments <br>";
        
        function arrayMap($c) {
            if (!empty($c)) {
                return ($a[$c]);
            }

            
        }

        $c=$_POST["continent"];
        $a=array("NA"=>"North America", "SA"=>"South America", "EU"=>"Europe", "AS"=>"Asia", "AU"=>"Australia", "AF"=>"Africa", "AN"=>"Antarctica");

        echo $c;
        echo (array_map("arrayMap",$c));
    }
    ?>
</body>
</html>