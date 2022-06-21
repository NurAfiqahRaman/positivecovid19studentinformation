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
        <<ul>
            <li><a href ="studentprofile.php" target="_self" ><img src="image/reading-book (1).png" alt="">&nbsp;<span>Students</span></a> </li>
            <li><a href ="studentschedule.html" target="_self" ><img src="image/teacher2.png" alt="">&nbsp;<span>Student Schedule</span></a> </li>
            <li><a href ="studentassessment.php" target="_self" ><img src="image/school.png" alt="">&nbsp;<span>Assessment</span></a> </li>
            <li><a href ="settings.html" target="_self" ><img src="image/settings.png" alt="">&nbsp;<span>Settings</span></a> </li>
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
                <h2>Upload Files</h2>
                        
                        
                    </div>
                    <br><br>
                    
                    <br><br><br>
                    
                    <form id="register" action="finalstudentassessment.php" method="POST" class="input-group">
                    <div class="input-field"><span class="details">SUBJECT CODE</span><input type="text" name="subject_id" placeholder="Subject Code" required>
                    <div class="input-field"><span class="details">DETAILS</span><input type="text" name="details" placeholder="Details" required>
                    <div class="input-field"><span class="details">ASSIGNED DATE </span><input type="text" name="assigned_date" placeholder="yy mm dd ex:2022-01-21" required>
                    <div class="input-field"><span class="details">DUE DATE </span><input type="text" name="due_date" placeholder="yy mm dd ex:2022-01-21" required>
                    
                    <br><br><br>
                    
                   
                    
                    
                    
                    
                </form>
                <br><br><br><button type="submit" name="submit" class="save-btn">SAVE</button>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</body>



</html>
