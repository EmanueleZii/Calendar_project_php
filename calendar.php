<?php

include "connection.php";

$successMsg ="";
$errorMsg ="";
$eventsFromDB =[];

# Gestione dei appuntamenti

if($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST['action'] ?? '') == "add" )
{
    $course = trim($_POST['course_name']?? '');
    $instructor =trim($_POST['instructor_name'] ?? '');
    $start = $_POST['start_date'] ?? '';
    $end = $_POST['end_date'] ?? '';

    if($course &&  $instructor &&$start && $end ){
        $stmt = $conn->prepare("INSERT INTO appointments (course_name, instructor_name, start_date, end_date) VALUES(?,?,?,?)");
    }

    $stmt->bind_param("ssss",$course, $instructor, $start, $end);
    
    $stmt->execute();
    
    $stmt->close();

    header("Location: " . $_SERVER["PHP_SELF"] . "?success");

    exit;
}else{
    header("Location: " . $_SERVER["PHP_SELF"] . "?error=1");
    exit;
}

# gestisci la modifica dei appuntamenti



?>