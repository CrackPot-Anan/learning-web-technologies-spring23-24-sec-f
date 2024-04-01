<html>
<head>
    <title>Log In Page</title>
</head>
<body>
        <form class="" action="../Controller/logch.php" method="post" autocomplete="off">
        
        <table border="1" align="center">
            <h3 align="center">Please enter your details</h3>
            
            <tr>
                <td>username</td>
            </tr>
            <tr>
                <td><input type="text" name="username" id="username"/></td>
            </tr>
            <tr>
                <td>Password: </td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" requred value=""/> </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="check[]" value="" required/> Remember me </td>
                <td><a href="../forgetpassword.php" >Forget Password?</a></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br>
                <input type="submit" name="submit" value="Log In" /><br><br>
            </td>
            </tr>
            <tr>
                <td colspan="2">Don't have an account? <a href="../view/registration.php" >Sign up </a><br><br></td>
            </tr>
        </table>
        </form>
</body>
</html>