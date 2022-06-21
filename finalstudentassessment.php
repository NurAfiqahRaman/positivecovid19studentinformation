<?php
include 'conn.php';
session_start();




if (isset($_POST['subject_id']) && isset($_POST['assigned_date'])
&& isset($_POST['due_date'])) 
{

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    $subject_id=$_POST['subject_id'];
    $assigned_date = validate ($_POST['assigned_date']);
    $due_date = validate ($_POST['due_date']);
    $details=validate ($_POST['details']);
    
    
        $sql3 = "INSERT INTO subject_lecturer (subject_id) 
        VALUES ('$subject_id')";

        $sql2 = "INSERT INTO homework (subject_id, homework_assign_date, homework_due_date,
        homework_details) VALUES ('$subject_id', '$assigned_date',
        '$due_date', '$details')";
        
        
        
        $result3 = mysqli_query($conn, $sql3);
        $result2 = mysqli_query($conn, $sql2);
       

        if ($result2 && $result3) {
            header('location:studentassessment.php');
            
        }
}

else {
    echo mysqli_error($conn);
}
?>
