<html>

<head>
    <title>lecturer header page</title>
</head>

<body>
<div class="side-menu">
        <div class="brand-name">
        <a href="lecturer.php" class="btn"><h1>PCISS</h1><a>
        </div>
        <ul>
            <li><img src="image/reading-book (1).png" alt="">&nbsp;<span><a href="studentprofile.php" class="btn">Students<a></span> </li>
            <li><img src="image/teacher2.png" alt="">&nbsp;<span><a href="student_schedule.html" class="btn">Student Schedule<a></span> </li>
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
        $sql = "SELECT lecturer_fname, lecturer_lname from lecturer 
        WHERE email='".$_SESSION['email']."' AND password='".$_SESSION['password']."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "<h1>Welcome, ".$row['lecturer_fname']." ".$row['lecturer_lname']."</h1>";
        $conn->close();
            
        ?>
        </div>
</body>

</html>