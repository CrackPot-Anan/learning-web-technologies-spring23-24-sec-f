<?php
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $day = $_POST['day'];
     $month = $_POST['month'];
     $year = $_POST['year'];
     $gender = isset($_POST['gender']) ? $_POST['gender'] : array();
     $email = $_POST['email'];
     $pnumber =$_POST['pnumber'];
     $password = $_POST['password'];
     $confirmpassword = $_POST['confirmpassword'];

     if (isset($_POST['submit'])) {
        if (empty($fname) || empty($lname) || empty($day) || empty($month) || empty($year) || empty($month) || empty($email) || empty($pnumber) || empty($password) || empty($confirmpassword)){
            $message = "Please fill-up all fields!";
        } else if(empty($confirmpassword) || $password !== $confirmpassword) {
            $errors[] = "Passwords do not match";
        }  else if(empty($gender)) {
        $errors[] = "Gender is required";
        }
     }
     
    if ($message) {
        echo "<script>alert('$message');</script>";
    } else {
        header('Location: wel.php');
    }
    
?>