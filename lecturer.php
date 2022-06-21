<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lecturerstyle.css">
    <title>Lecturer Panel</title>
</head>

<body>
<?php 
include("lechead.php"); 
include("conn.php");
?>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                    <?php
                        $sql = "SELECT count(*) from covid_student";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo "<h1>".$row["count(*)"]."</h1>";
                    ?>
                        <h3>Covid Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                        $sql = "SELECT count(*) from homework";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo "<h1>".$row["count(*)"]."</h1>";
                    ?>
                        <h3>Homework</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                        $sql = "SELECT count(*) from subject";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo "<h1>".$row["count(*)"]."</h1>";
                    ?>
                        <h3>Subjects</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/schools.png" alt="">
                    </div>
                </div>
                
            </div>
            <!-- Didn't show the unsubmit homework list-->
            <div class="content-2">
                <div class="recent-tasks">
                    <div class="title">
                        <h2>Recent Task Due</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Due Date</th>
                        </tr>
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
                

                    </table>
                </div>
            </div>
            <?php 
            include('footer.php');
            ?>
        </div>
    </div>
</body>
<?php $conn->close();?>
</html>