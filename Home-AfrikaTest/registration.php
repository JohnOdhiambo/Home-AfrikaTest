<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="top"></div>
    <div class="register">
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <label for="UserName">User Name:</label>
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <br>

            <label for="Email">Email:</label>
            <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
            <br>

            <label for="Password">Password:</label> <br> 
            <input type="password" class="login-input" name="password" placeholder="Password" required>
            <br>
            <br>
            
            <input type="submit" name="submit" value="Register" class="login-button"> 
            <br>
            <p class="link"><a href="login.php">Click to Login</a></p>
        </form>
    </div>

<?php
    }
?>
</body>
</html>