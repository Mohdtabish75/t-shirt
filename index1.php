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
        <div id="forms">
            <form action="insert.php" method="post" onsubmit="return success()">
                <center><h1>REGISTRATION FORM</h1></center>
                <input type="text" name="fname" placeholder="first Name*" id="input-size" required>
                <input type="text" name="lname" placeholder="last Name*" id="input-size" required><br>
                <input type="text" name="contact" placeholder="Contact No*" id="input-size"required>
                <input type="email" name="email" placeholder="Emial-ID*" id="input-size"required><br>
                <input type="text" name="qualification" placeholder="Qualification*" id="input-size" required>
                <input type="text" name="hospital" placeholder="Hospital/Clinic*" id="input-size"required><br>
                <input type="text" name="city" placeholder="City*" id="input-size" required>
                <input type="text" name="state" placeholder="State*" id="input-size"required><br>
                <input type="checkbox" name="" id="" required><span>By creating an acoount you agree to abide our Term of Service and agree to our privacy policy</span><br>
                <center><input type="submit" name="submit" id="submit"></center>
                <center><p>Have an account? <a href="login.php">Login</a></p></center>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("submit").addEventListener('click',()=>{
            alert('Registration Success');
            return true;
        })
    </script>
</body>
</html>