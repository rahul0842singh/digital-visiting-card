<?php
//Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '1234';
$dbName = 'post_rating';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_errno):
    die('Connect error:'.$db->connect_error);
endif;
?>