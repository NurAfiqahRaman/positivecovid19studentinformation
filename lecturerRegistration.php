<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link type="text/css" rel="stylesheet" href="authStyle.css">
    </head>
    <?php
        include('conn.php');

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $lectid = $_POST['lectid'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO lecturer VALUES ('$lectid', '$fname', '$lname', '$email', '$password')";
    ?>
    <body>
        <wrapper>
            <?php
            if ($conn->query($sql)) {
                ?>
                <div class="box">
                    <div class="input">
                        Registration was successful! Please Login again.
                    </div>
                    <div class="bottom">
                        <a href="login.html">Return to Login</a>
                    </div>
                </div>
                <?php
            }
            else 
            {
                ?>
                <div class="box">
                    <div class="input">
                        There was an error during registration.
                    </div>
                    <div class="bottom">
                        <a href="login.html">Return to Login</a>
                    </div>
                </div>
                <?php
            }
            $conn->close();
            ?>
        </wrapper>
    </body>
</html>
