<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jobclues";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn){
        // die("Error". mysqli_connect_error());
        echo "Unable to load yoour page";
    }
    if(!isset($_SESSION)){
        session_start();
      }
?>