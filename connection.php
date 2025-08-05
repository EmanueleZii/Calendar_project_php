<?php

// connessione al db

$host = "localhost";
$user="root";
$pass ="";
$db= "calendar";

$conn = new  mysqli($host, $user, $pass, $db);

$conn->set_charset("utf")




?>