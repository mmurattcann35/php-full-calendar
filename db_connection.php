<?php
    $host       = "localhost";
    $db_name    = "fullCalendar";
    $user       = "root";
    $password   = "";

    try
    {
        // DB Connection With PDO
         $db = new PDO("mysql:host=$host; dbname=$db_name",$user,$password);

    }
    catch (Exception $e)
    {
        echo "ERROR! <br>" . $e->getMessage();
        die();
    }
?>
