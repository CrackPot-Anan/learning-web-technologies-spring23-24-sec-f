<?php
require_once('../Model/db.php');
    if(isset($_POST["submit"])){
        $con = dbConnection();
        $username = $_POST["username"];
       
        $password = $_POST["password"];
        $result = mysqli_query($con,"SELECT * FROM employees WHERE username='$username' OR password='$password'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
            }
            else{
                echo
                "<script> alert('wrong Password Reload Again')</script>";
                
            }
        }
        else{
            echo
            "<script> alert('User not Registerered'); </script>";
        }
    }
?>