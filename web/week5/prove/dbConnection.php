<?php 
function getDb() {
    $db = NULL;

    try {
//         $dbUrl = getenv('postgres://fmpgurhhoetphn:a3ab69363b4c84cc276e0c3dcc8a4172e66b50ee9c3c5afff530f46796375789@ec2-54-243-197-120.compute-1.amazonaws.com:5432/d42lngvdmnhqsb
//         ');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=ec2-54-243-197-120.compute-1.amazonaws.com
  ;port=5432
  ;dbname=d42lngvdmnhqsb
  ;fmpgurhhoetphn
  ;a3ab69363b4c84cc276e0c3dcc8a4172e66b50ee9c3c5afff530f46796375789
);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $ex) {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

    return $db;
}
?>