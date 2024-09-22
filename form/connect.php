<?php
   $server= 'localhost';
   $user = 'root';  
    $pass = '';
    $database = 'enbesu';

    // $conn = new mysqli($server, $user, $pass, $database);
    $mysqli = new mysqli("localhost","root","","enbesu");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
?>