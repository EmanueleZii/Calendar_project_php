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

    header("Location: " . $_SERVER["PHP_SELF"] . "?success=1");

    exit;
}else{
    header("Location: " . $_SERVER["PHP_SELF"] . "?error=1");
    exit;
}

# gestione la modifica dei appuntamenti

if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST['action'] ?? '') === 'edit')
{
    $id = $_POST['event_id'] ?? null;
    $course = trim($_POST["course_name"] ?? '');
    $instructor =trim($_POST['instructor_name'] ?? '');
    $start = $_POST['start_date'] ?? '';
    $end = $_POST['end_date'] ?? '';

   if( $course &&  $instructor &&$start && $end )
    {
        $stmt = $conn->prepare(
            "UPDATE appointments 
             SET course_name = ?, instructor_name = ?, start_date= ?, end_date=?"
            );
        
        $stmt->bind_param("ssss",$course, $instructor, $start, $end);
        
        $stmt->execute();
    
        $stmt->close();
        
        header("Location: " . $_SERVER["PHP_SELF"] . "?success=2");

        exit;
    }else{
        header("Location: " . $_SERVER["PHP_SELF"] . "?error=2");
        exit;
    }
}


#Gestione eliminazione Appuntamenti
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST['action'] ?? '') === 'delete')
{
    $id = $_POST['event_id'] ?? null;
    if ($id){
        $stmt = $conn->prepare(
            "DELETE  FROM appointments WHERE id = ?"
            );
        
        $stmt->bind_param("i",$id);
            
        $stmt->execute();
        
        $stmt->close();
            
        header("Location: " . $_SERVER["PHP_SELF"] . "?success=3");

        exit;
    }
   
}

##Success And Error Messagge
if (isset()){
    
}
?>