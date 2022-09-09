<?php
    $database_username = 'root';
    $database_password = '';
    $pdo_conn = new PDO( 'mysql:host=localhost;dbname=greenplanet', $database_username, $database_password );
    if(!$pdo_conn){
        die("Error: Failed to connect to database!");
    }
?>