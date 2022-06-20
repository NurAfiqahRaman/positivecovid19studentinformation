<?php
    include('conn.php');

    $email = $_POST['email'];

    $sql = "SELECT password from student where email = '$email'";
    
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $sql = "SELECT password from lecturer where email = '$email'";
        
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
                                That email address is not registered
                                <meta http-equiv="refresh" content="3; URL=login.html">
                            </div>   
                        </div>
                    </wrapper>
                </body>
            </html>
            <?php
        }
        else {
            $data = $result->fetch_assoc();
            $subject = "Password Recovery";

            $message = "
            <html>
            <head>
            <title>Password Recovery</title>
            </head>
            <body>
                This is your password: ".$data['password']."
            </body>
            </html>
            ";

            $mail = mail($email, $subject, $message);
            ?>
            <!DOCTYPE html>
            <html>
                <head>
                    <link rel="stylesheet" href="authStyle.css">
                    <title>Recover Password</title>
                </head>
                <body>
                    <wrapper>
                        <div class="box">
                            <div class="input">
                                An email has been sent to <?php echo $email;?>.
                                Please check your spam mail as well.
                                <meta http-equiv="refresh" content="5; URL=login.html">
                            </div>   
                        </div>
                    </wrapper>
                </body>
            </html>
            <?php
        }
    } else {
        $data = $result->fetch_assoc();
        $subject = "Password Recovery";

        $message = "
        <html>
        <head>
        <title>Password Recovery</title>
        </head>
        <body>
            This is your password: ".$data['password']."
        </body>
        </html>
        ";

        $mail = mail($email, $subject, $message);
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <link rel="stylesheet" href="authStyle.css">
                <title>Recover Password</title>
            </head>
            <body>
                <wrapper>
                    <div class="box">
                        <div class="input">
                            An email has been sent to <?php echo $email;?>.
                            Please check your spam mail as well.
                            <meta http-equiv="refresh" content="5; URL=login.html">
                        </div>   
                    </div>
                </wrapper>
            </body>
        </html>
        <?php
    }
?>