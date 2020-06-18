<?php
$dsn = "mysql:host=localhost;dbname=visitingcard";
$db_user = "root";
$db_password = "";

try {
    $conn =  new PDO($dsn, $db_user,$db_password);

    //set error mode
    $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}

catch(PDOException $e)
{
    echo 'connection failed'. $e->getMessage();
}



?>