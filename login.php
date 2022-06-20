<?php
    include('conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from student where email='$email' AND password='$password'";
    
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $sql = "SELECT * from lecturer where email='$email' AND password='$password'";
        
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            session_unset();
            ?>
            <!DOCTYPE html>
            <html>
                <head>
                    <link rel="stylesheet" href="authStyle.css">
                    <title>Login</title>
                </head>
                <body>
                    <wrapper>
                        <div class="box">
                            <div class="input">
                                Login Failed
                                <meta http-equiv="refresh" content="3; URL=login.html">
                            </div>   
                        </div>
                    </wrapper>
                </body>
            </html>
            <?php
        }
        else {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            include('lecturer.php');
        }
    } else {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        include('student.html');
    }
    $conn->close();

?>