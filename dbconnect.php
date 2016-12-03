<?php

    $HOST = "localhost";
    $USER = "root";
    $PASS = "";
    $DB = "marsadb";
    
    $connect = mysqli_connect($HOST,$USER,$PASS,$DB);
    
    mysqli_set_charset($connect,'utf8');
    
    if(!$connect)
    {
        
        die ("Database Connect Error.");
    }
 
?>