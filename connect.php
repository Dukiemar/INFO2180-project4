<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "chepoDatabase";
    $db = mysql_connect($hostname, $user, $password) or die("Error");
    mysql_select_db(database, $db) or die("Error");
?>
