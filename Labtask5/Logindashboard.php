<?php

    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
<header>
        <h1>Logo</h1>
        Logged In As <a href="viewprofile.php">Anan</a>
        <a href="logout.php">| Log Out</a>
    </header>
    <header>
        <h1>Logo</h1>
        <h4>Account</h4>
        <a href="Logindashboard.php">DashBoard</a><br>
        <a href="viewprofile.php">View Profile</a><br>
        <a href="editprofile.php">Edit Profile</a><br>
        <a href="#">Change Profile Picure</a><br>
        <a href="changepassword.php">Change Password</a><br>
        <a href="logout.php">Log Out</a>
        
    </header>
    <footer>
        <p>Copyright 2017</p>


    </footer>
    
</body>
</html>