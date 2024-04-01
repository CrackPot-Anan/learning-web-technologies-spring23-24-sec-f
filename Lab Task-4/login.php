<html>
<head>
    <title>HTML form</title>
</head>
<body>
<header>
        <h1>Logo</h1>
        <a href="index.php">Home</a>
        <a href="login.php">Log In</a>
        <a href="Registration.php">Registration</a>
    </header>
    <fieldset>
        <legend>Login</legend>
        <form method="post" action="loginCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br><hr><br>

            <input type="checkbox" name="checkbox" href="forgotpassword.php"><a href="forgotpassword.php">Forgot Password</a><br><br>
            <input type="submit" name="submit" value="Submit" /> 
        </form>
    </fieldset>
</body>
</html>