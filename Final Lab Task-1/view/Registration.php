<html>
<head>
    <title>Signup Page</title>
</head>
<body>
        <form class="" action="../Controller/regch.php" method="post" autocomplete="off">
        
        <table border="0" align="center">
            <h3 align="center">Create Your Accout Here</h3>
                
            <tr>
            <td>
                <p>Name:</p>
                    <input type="text" name="name" id="name" required values=""/>
                    <br>
                <p>User Name: </p>
                <input type="text" name="username" id="username" required value=""></td>
            </tr>
            <tr>
                <td>Email:</td>
            </tr>
            <tr>
                <td><input type="email" name="email" id="email" required value=""></td>
            </tr>           
            <tr>
            <td>
            <p>Password: </p>    
            <input type="password" name="password" id="password" required value="">
            <p>Confirm Password: </p>
            <input type="password" name="confirmpassword" id="connfirmpassword" required value=""> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="check[]" value="" required/> I have read the <a href="term.php" >Terms & Conditions </a><br><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" name="submit">Sign Up</button><br><br> </td>
            </tr>
            <tr>
                <td colspan="2">Already have an Accout? Click here to <a href="login.php" >Sign in </a><br><br></td>
            </tr>
    </table>
        </form>
</body>
</html>