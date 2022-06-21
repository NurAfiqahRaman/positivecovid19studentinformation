<?php
include 'conn.php';
session_start();




if (isset($_POST['matric_number']) && isset($_POST['mysejahtera_id'])
&& isset($_POST['cstart_date']) && isset($_POST['clast_date'])  
&& isset($_POST['sstart_date'])  && isset($_POST['slast_date'])
&& isset($_POST['symptoms_details'])  && isset($_POST['symptoms_condition'])) 
{

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    $matric_number=$_POST['matric_number'];
    $mysejahtera_id = validate ($_POST['mysejahtera_id']);
    $cstart_date = validate ($_POST['cstart_date']);
    $clast_date = validate ($_POST['clast_date']);
    $sstart_date = validate ($_POST['sstart_date']);
    $slast_date = validate ($_POST['slast_date']);
    $symptoms_details = validate ($_POST['symptoms_details']);
    $symptoms_condition = validate ($_POST['symptoms_condition']);
    


    
        $sql3 = "INSERT INTO covid_student (mysejahtera_id, covid_start_date, covid_last_date) 
        VALUES ('$mysejahtera_id', '$cstart_date',
        '$clast_date')";

        $sql2 = "INSERT INTO symptoms (matric_number, mysejahtera_id, symptoms_details, symptoms_condition,
        symptoms_start_date, symptoms_last_date) VALUES ('$matric_number', '$mysejahtera_id', '$symptoms_details',
        '$symptoms_condition', '$sstart_date', '$slast_date')";
        
        
        
        $result3 = mysqli_query($conn, $sql3);
        $result2 = mysqli_query($conn, $sql2);
       

        if ($result2 && $result3) {
            header('location:studenthealthstatus.php');
            
        }
}

else {
    echo mysqli_error($conn);
}
?>
