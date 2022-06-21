<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentprofilestyle.css">
    <title>Lecturer Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>PCISS</h1>
        </div>
        <ul>
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
                    <a href="#" class="btn">Add New</a>
                    <img src="image/notifications.png" alt="">
                    <div class="img-case">
                        <img src="image/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="staff-details">
                    <div class="title">
                        <h2>Covid-19 Students Information</h2>
                       
                    </div>
                   
                   <table>
                       <thead>

                       </thead>

                       <?php
                        include 'conn.php';

                        $matric_number=$_REQUEST['matric_number'];
                        $sql = "SELECT * FROM symptoms WHERE matric_number='$matric_number'";
                        $result=$conn->query($sql);
                        $result = $conn->query($sql) or die($conn->error);
                        

                        while($row = $result->fetch_assoc()) 
                        {
                            //$student_id=$row['student_id'];
                        ?>
                            
                            <tr>
                            <th>Matric Number</th>
                            <td><?php echo $row['matric_number'] ?></td>
                        </tr>
                        <tr>
                            <th>MySejahtera ID</th>
                            <td><?php echo $row['mysejahtera_id'] ?></td>
                        </tr>
                        <tr>
                            <th>Symptoms Details</th>
                            <td><?php echo $row['symptoms_details'] ?></td>
                        </tr>
                        <tr>
                            <th>Symptoms Condition</th>
                            <td><?php echo $row['symptoms_condition'] ?></td>
                        </tr>
                        <tr>
                            <th>Symptoms Start Date</th>
                            <td><?php echo $row['symptoms_start_date'] ?></td>
                        </tr>
                        <tr>
                            <th>Symptoms Last Date</th>
                            <td><?php echo $row['symptoms_last_date'] ?></td>
                        </tr>
                           
                            
                        <?php
                        }
                        ?>
                       </tbody>
                   </table>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
