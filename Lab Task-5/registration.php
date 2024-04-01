<html>
<head>
    <title>Signup Page</title>
</head>
<body>
        <form class="" action="validate.php" method="post" autocomplete="off">
        
        <table border="0" align="center">
            <h3 align="center">Create Your Accout Here</h3>
                
            <tr>
            <td>
                <p>First Name</p>
                    <input type="text" name="fname" id="fname" required values=""/>
                    <br>
                <p>Last Name: </p>
                    <input type="text" name="lname" id="lname" required value=""></td>
            </tr>
            <tr>
                <td>
                <br><label for="dob">Date of Birth:</label><br>
                </td>
            </tr>
            <tr>
                <td>
                <select name="day" id="day">
                        <option value="">Day</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="month" id="month">
                        <option value="">Month</option>
                        <?php
                            $months = array(
                            "January", "February", "March", "April", "May", "June", "July",
                            "August", "September", "October", "November", "December");

                            foreach ($months as $index => $month) {
                                $value = $index + 1;
                                echo "<option value='$value'>$month</option>";
                            }
                        ?>

                    </select>
                    <select name="year" id="year">
                        <option value="">Year</option>
                        <?php
                            $currentYear = date("Y");
                            $startYear = $currentYear - 10; 
                            for ($i = $currentYear; $i >= $startYear; $i--) {
                            echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td>
                <label>Gender:</label>
                    <input type="checkbox" id="male" name="gender[]" value="Male">
                    <label for="male">Male</label>
                    <input type="checkbox" id="female" name="gender[]" value="Female">
                    <label for="female">Female</label>
                    <input type="checkbox" id="other" name="gender[]" value="Other">
                    <label for="other">Other</label><br><br> 
                </td>
            </tr>   
            <tr>
            <td>
            <p>Phone Number</p>
            <input type="number" name="pnumber" id="pnumber"><br>
            <p>Email:</p>
            <input type="text" name="email" id="email" required value="">
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