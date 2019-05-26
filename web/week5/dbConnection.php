<?php 
function getDb() {
    $db = NULL;

    try {
        $dbUrl = pg_connect(getenv("DATABASR_URL"));

        $dbOpts = parse_url($dbUrl);
        // $dbUser = 'ta_user';
        // $dbPassword = 'ta_pass';
        // $dbName = 'scripture_ta';
        // $dbHost = 'localhost';
        // $dbPort = '5432';

        // $dbHost = $dbOpts["host"];
        // $dbPort = $dbOpts["port"];
        // $dbUser = $dbOpts["user"];
        // $dbPassword = $dbOpts["pass"];
        // $dbName = ltrim($dbOpts["path"], '/');

        $db = new PDO("pgsql:host=ec2-54-235-167-210.compute-1.amazonaws.com
        ;dbname=d6oki00667h33u", 'smorcmcpfbcunb', 'True2god'
        ');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $ex) {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

    return $db;
}
?>