<?php 
    $conn = mysqli_connect('localhost','root','','lumina');
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $qualification = $_POST['qualification'];
        $hospital = $_POST['hospital'];
        $city = $_POST['city'];
        $state = $_POST['state'];
    }
    $sql = "INSERT INTO luminadata(fname, lname, contact, email, qualification, hospital, city, state) VALUE ('$fname', '$lname', '$contact', '$email', '$qualification', '$hospital', '$city', '$state')";
    $result = mysqli_query($conn,$sql);
    header('location: http://localhost/tnai/login.php');
    
    ?>