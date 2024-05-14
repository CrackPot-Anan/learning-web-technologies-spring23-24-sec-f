<?php
require_once('../model/userModel.php');
require_once('validations.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //print_r($_REQUEST);
    $user = $_REQUEST['user'];

    if (!empty($user)) {
        $data = json_decode($user);
        //print_r($data);

        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "JSON error: " . json_last_error_msg();
        } else {
            $username = $data->username;
            $name = $data->name;
            $password = $data->password;
            $cpassword = $data->cpassword;
            $dob_day = $data->dob_day;
            $dob_month = $data->dob_month;
            $dob_year = $data->dob_year;
            $gender = $data->gender;
            $email = $data->email;

            //print_r($data);
        }
    } else {
        echo "No JSON data received";
    }


    /*$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$dob = $_REQUEST['dob'];
$cpassword= $_REQUEST['cpassword'];
if (isset($_REQUEST["gender"])) {
    $gender = $_POST["gender"];
}
*/
    $message = "";




    //if (isset($_POST['submit'])) {
    if ($name == "" || $email == "" || $username == "" || $gender == "" || $password == "" || $dob_year == "" || $dob_month == "" || $dob_day == "") {
        echo "Please fill-up all fields!";
    } elseif (!ctype_alpha(substr($username, 0, 1))) {
        echo "First character must be a letter";
    } elseif (str_word_count($name) < 2) {
        echo "Name must contains at least two words";
    } elseif (strlen($password) < 8) {
        echo "Password must contains at least 8 characters";
    } elseif (!hasDigit($password)) {
        echo "Password must contains at least one digit";
    } elseif (!hasSpecialChar($password)) {
        echo "Password must contains at least one special character";
    } elseif (hasDigit($name)) {
        echo "Name can only contain letter";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
    } elseif (checkEmail($email)) {
        echo "Email is already registerd";
    } elseif (checkUsername($username)) {
        echo "Username is not available";
    } elseif ($password != $cpassword) {
        echo "Confirm password doesn't match";
    } else {
        $dob = $dob_year . '-' . $dob_month . '-' . $dob_day;
        $user = ['username' => $username, 'name' => $name, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'password' => $password, 'role' => 'user'];
        $status = createUser($user);
        if ($status) {
            echo "Success";
        } else {
            echo "DB error! Please try again";
        }
    }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - K-R Event</title>
    <script>
        function validateForm() {
            var fileInput = document.getElementById('myfile');
            var file = fileInput.files[0];

            if (!file) {
                alert("Please select an image to upload");
                return false;
            }
        }
    </script>
</head>
<body>
<div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
  <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">K-R EVENT Management Company</div>
</div>


<div style="background-color: white; padding: 10px;">
  <a href="profile.php" style="color: black; font-weight: bold; text-decoration: none;">View Profile</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;

  <a href="changepicture.php" style="color: red; text-decoration: none; font-weight: bold;">Change Profile Picture</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="changepassProfile.php" style="color: black; text-decoration: none; font-weight: bold;">Change Password</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="userlist.php" style="color: black; text-decoration: none; font-weight: bold;">All Users List</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="allevents.php" style="color: black; text-decoration: none; font-weight: bold;">Event History</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  
  <a href="allpayment.php" style="color: black; text-decoration: none; font-weight: bold;">All Payment</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="allsponsor.php" style="color: black; text-decoration: none; font-weight: bold;">All Sponsorship List</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="agenda_list.php" style="color: black; text-decoration: none; font-weight: bold;">All Agenda List</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="host_create.php" style="color: black; text-decoration: none; font-weight: bold;">Create New Host</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
  <a href="dashboardCustomer.php" style="color: black; text-decoration: none; font-weight: bold;">Back to Homepage</a>&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;
 

<div style="margin-top: 60px; margin-left: 20%; margin-right: 20%; text-align: center;">
<div style="border: 1px solid #ccc; width: 200px; height: 200px; margin: 0 auto;"> 


    <?php
        $upload_dir = "../upload/";
        $files = glob($upload_dir . "*.{jpg,png,gif}", GLOB_BRACE);
        usort($files, function($a,$b)
        {
            return filemtime($b)- filemtime($a);

        });
        $latest_file = reset($files);
        if($latest_file)
        {
            echo "<img src= '$latest_file' alt='Uploaded Image' style='max-width: 100%; max-height: 100%;'>";

        }else {
            echo "<p> no image uploaded yet </p>";
        }
    ?>



    </div>

    <div style="margin-top: 30px;">

        <form method="post" action="../controller/fileCheck.php" enctype="multipart/form-data" onsubmit="return validateForm()">

            Image: <input type="file" name="myfile" id="myfile"/> <br>

            <div style="margin-top: 20px;">

                <input type="submit" name="submit" value="Upload" />  

                <input type="reset" value="Reset">

            </div>

        </form>

    </div>

</div>


</body>
</html>
