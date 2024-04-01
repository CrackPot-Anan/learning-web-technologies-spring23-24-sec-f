
<html>
<head>
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Logo</h1>
        <a href="index.php">Home</a>
        <a href="login.php">Log In</a>
        <a href="Registration.php">Registration</a>
    </header>
    <main>
    <form action=>
        <fieldset>
            <legend>Registration</legend>
            
            <label for="name">Last name:</label>
            <input type="text"><hr>
            <label for="email">Email:</label>
            <input type="email"><hr>
            <label for="uname">Username</label>
            <input type="text"><hr>
            <label for="pass">Password</label>
            <input type="password"><hr>
            <label for="conpass">Confirm password</label>
            <input type="password"><hr>
            <fieldset>
            <legend> Gender</legend>
                <input type="radio" name="Gender">Male
                <input type="radio" name="Gender">Female
                <input type="radio" name="Gender">Others
        </fieldset>
        <fieldset>
            <legend>Birth Date</legend>
                <input type="Number" name="">
                <input type="Number" name="">
                <input type="Number" name="">
        </fieldset><br><br>
            <input type="submit" value="Submit">
            <input type="reset" href="Registration.php">
  </fieldset>
</form>

    </main>
    <footer>
        <p>Copyright 2017</p>


    </footer>
</body>
</html>