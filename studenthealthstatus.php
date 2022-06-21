<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studenthealthstatusstyle.css">
    <title>Student Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>PCISS</h1>
        </div>
        <ul>
            
            <li><a href ="studenthealthstatus.php" target="_self" ><img src="image/healthstatus.png" alt="">&nbsp; <span>Health Status</span></a> </li>
            <li><a href ="studentschedule.html" target="_self" ><img src="image/reading-book (1).png" alt="">&nbsp;<span>Schedule</span></a> </li>
            <li><a href ="studentabsenceform.html" target="_self" ><img src="image/letter.png" alt="">&nbsp;<span>Absence Form</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="image/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Update</a>
                    <img src="image/notifications.png" alt="">
                    <div class="img-case">
                        <img src="image/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="content-2">
            
                <div class="health-student-details">
                <div class="title">
                        <h2>Student Health Condition</h2>
                        
                        
                    </div>
                    <br><br>
                    <h3>Please fill in this form if you are covid-19 patients, have any symptoms or close contact with positive covid-19 patients</h3>
                    
                    <form id="register" action="finalstudenthealthstatus.php" method="POST" class="input-group">
                    
                    <div class="input-field"><span class="details">MATRIC NUMBER</span><input type="text" name="matric_number" placeholder="Matric Number" required>
                    <div class="input-field"><span class="details">MY SEJAHTERA ID </span><input type="text" name="mysejahtera_id" placeholder="My Sejatera ID" required>
                   
                    <div class="input-field"><span class="details">Covid-19 Start Date </span><input type="text" name="cstart_date" placeholder="yy mm dd ex:2022-01-21" required>
                    <div class="input-field"><span class="details">Covid-19 Last Date </span><input type="text" name="clast_date" placeholder="yy mm dd ex:2022-01-21" required>
                    <br><br><h2><center>Symptoms Details</center></h2><br>
                    <div class="input-field"><span class="details">Start Date </span><input type="text" name="sstart_date" placeholder="yy mm dd ex:2022-01-21" required>
                    <div class="input-field"><span class="details">Last Date </span><input type="text" name="slast_date" placeholder="yy mm dd ex:2022-01-21" required>
                    <div class="input-field"><span class="details">List Of Symptoms </span><input type="text" name="symptoms_details" placeholder="Symptoms" required>
                    <div class="input-field"><span class="details">Symptoms Condition </span><input type="text" name="symptoms_condition" placeholder="Normal/Severe" required>
                    
                   
                    <br><br><br>
                    
                    
                    <br><br><br><button type="submit" name="submit" class="save-btn">SAVE</button>
                    
                </form>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</body>



</html>
