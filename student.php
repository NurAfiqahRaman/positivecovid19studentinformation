<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studstyle.css">
    <title>Student Panel</title>
</head>

<body>
<?php include("studhead.php"); ?>
        
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                    <?php
                    include("conn.php");
                    $sql = "SELECT matric_number from covid_student WHERE matric_number
                    IN(SELECT matric_number from student 
                    where email='".$_SESSION['email']."' AND password='".$_SESSION['password']."')";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        
                        echo "<h1>Positive</h1>";
                    }
                    else
                    {
                        echo "<h1>Negative<h1>";
                    }
                      
                    ?>
                        <h3>Status</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/diagnosed.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                    include("conn.php");
                        $sql = "SELECT count(*) from subject";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo "<h1>".$row["count(*)"]."</h1>";
                    ?>
                        <h3>Subject</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/pen.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                    include("conn.php");
                        $sql = "SELECT count(*) from homework";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo "<h1>".$row["count(*)"]."</h1>";
                    ?>
                        <h3>Assignment</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                    include("conn.php");
                        $sql = "SELECT count(*) from notes";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo "<h1>".$row["count(*)"]."</h1>";
                    ?>
                        <h3>Note</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/note.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="upcoming">
                    <div class="title">
                        <h2>Upcoming</h2>
                    </div>
                    <table>
                    

                        <tr>
                            <th>Subject</th>
                            <th>Title</th>
                            <th>Due Date</th>
                        </tr>
                        <tr>
                        <?php
                        include("conn.php");
                        $sql = "SELECT subject_id, homework_details, homework_due_date from homework";
                        $result = $conn->query($sql);
                        if($row = $result->fetch_assoc())
                        {
                        echo "<td>".$row['subject_id']."</td>";
                        echo "<td>".$row['homework_details']."</td>";
                        echo "<td>".$row['homework_due_date']."</td>";
                        }
                        
                        ?>
                    </table>
                    
                </div>
            </div>
            <footer>&copy; Copyright 2022, PCISS System</footer> 
        </div>
        
    </div>
    
</body>



</html>