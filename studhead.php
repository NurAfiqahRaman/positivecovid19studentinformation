<html>
<head>
    <title>student header page</title>
    
</head>

<body>

<div class="side-menu">
        <div class="brand-name">
        <a href="student.php" class="btn"><h1>PCISS</h1></a>
        </div>
        <ul>
            <li><a href ="student_schedule.html" target="_self" ><img src="image/teacher2.png" alt="">&nbsp;<span>Student Schedule</span></a> </li>
            <li><a href ="coviddetails.html" target="_self" ><img src="image/teacher2.png" alt="">&nbsp;<span>Covid Form</span></a> </li>
            <li>&nbsp;<span><a href="logout.php" class="btn">Log Out<a></span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
        <?php
        include("conn.php");
        if(!isset($_SESSION['email']))
        {
            session_start();
        }
        $sql = "SELECT student_fname, student_lname from student 
        WHERE email='".$_SESSION['email']."' AND password='".$_SESSION['password']."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "<h1>Welcome, ".$row['student_fname']." ".$row['student_lname']."</h1>";
        $conn->close();
            
        ?>
        </div>
</body>

</html>