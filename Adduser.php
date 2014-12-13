<?php
    session_start();
    include('connect.php');
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['uname'];
    $password=$_POST['pword'];
    mysql_query("INSERT INTO user (id, firstname, lastname, password, username)VALUES('$id', $fname', '$lname', '$pword', '$uname')");
    header("location: adduser.html");
    mysql_close($con);
?>
