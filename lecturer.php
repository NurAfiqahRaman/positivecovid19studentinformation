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
    <?php include("lechead.php"); ?>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>8</h1>
                        <h3>Absentees</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>6</h1>
                        <h3>Quiz Attempt</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <h3>Subjects</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>4</h1>
                        <h3>Notes</h3>
                    </div>
                    <div class="icon-case">
                        <img src="image/note.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-tasks">
                    <div class="title">
                        <h2>Recent Task Due</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Total</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>BITP 3413</td>
                            <td>Assignment 2</td>
                            <td>3</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>BITU 2233</td>
                            <td>Mini Project</td>
                            <td>5</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        
                    </table>
                </div>
                <div class="new-absentee">
                    <div class="title">
                        <h2>Absentee</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="image/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="image/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="image/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="image/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="image/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="image/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="image/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="image/info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
            <?php 
            include('footer.php');
            ?>
        </div>
    </div>
</body>

</html>
