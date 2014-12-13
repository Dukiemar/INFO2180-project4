<?php
    session_start();  
    session_regenerate_id(true);
    session_unset();  
    session_destroy();
    //redirects to login page
    header('location:loginPage.html');
?>
