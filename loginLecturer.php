<?php
    session_start();
    if (!isset($_SESSION['email']))
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }

    include('conn.php');
    
    $sql = "SELECT * from lecturer where email = '".$_SESSION['email'].
    "' AND password= '".$_SESSION['password']."'";
    
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
                        </div>   
                    </div>
                </wrapper>
            </body>
        </html>
        <?php
    }
    else {
        include('lecture.php');
    }
    
    $conn->close();

?>