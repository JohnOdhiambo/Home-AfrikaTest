<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die("Connection failed: " . $con->connect_error);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
            ?>
            <div class="top"></div>
                <div class="login">
                    <form class="form" method="post" name="login">
                        <h1 class="login-title">Login</h1>
                        <label for="UserName">User Name:</label> <br>
                        <input type="text" name="username" placeholder="Username" required /> <br>
                        
                        <label for="Password">Password:</label>
                        <br>
                        <br>
                        <input type="password" name="password" placeholder="Password" required /> 
                        <br> 
                        <br>
                        
                        <input type="submit" value="Login" name="submit" />
                        <p class="link"><a href="registration.php">Click here to register</a></p>
                    </form>
                </div>

            <?php
    }
?>
</body>
</html>