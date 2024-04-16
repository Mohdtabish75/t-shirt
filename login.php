<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
   
    <div id="container">
        <div id="child-container">
            <div>
                <img src="Onco logo.png" alt="">
            </div>
            <div>
                <img src="Lumina logo.png" alt="">
            </div>
            <div>
                <img src="TNAI logo.png" alt="">
            </div>
        </div>
        <?php
    $conn = mysqli_connect('localhost','root','','lumina');
    if(isset($_POST['log'])){
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $sql="SELECT email,fname FROM luminadata WHERE email = '{$email}' AND fname = '{$fname}'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION['email']= $row['email'];
                $_SESSION['fname']= $row['fname'];
                header('location: http://localhost/tnai/index1.php');
            }
        }else{
            echo "<center>Invalid Email or Password</center>";
        }
    }
    ?>
        <div id="forms">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <center><h1>Login</h1></center>
                <input type="text" name="email" placeholder="Email*" id="input-size"><br>
                <input type="text" name="fname" placeholder="Password*" id="input-size"><br>
                <input type="checkbox" name="" id=""><span>Remember Me</span>
                <center><input type="submit" value="Login" name="log" id="submit"></center>
                <center><p>Don't have an account? <a href="index1.php">Sign Up</a></p></center>
            </form>
        </div>

</body>
</html>