<?php 
include("connection.php"); 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_form.css">
    <title>Form_Operations</title>
</head>
<body>
<form action="index.php">
        <input type="submit" name="submit" value="Home" class="btn1">
</form>
 <div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
    <div class="title">
        Registration Form 
    </div>  
<div class="form">
    <div class="input_field">
        <label>Username</label>
        <input type="text" class="input" name="userid" required>
        </div>
        <br>
        <div class="input_field">
        <label>Name</label>
        <input type="text" class="input" name="name" required>
         </div>
         <br>
         <div class="input_field">
        <label>Upload Picture</label>
        <input type="file" class="input" name="file" style=" margin-left:50px;">
         </div>
         <br>
         <div class="input_field">
        <label>Password</label>
        <input type="password" class="input" name="pass" required>
         </div>
         <br>
         <div class="input_field">
        <label>Confirm Password</label>
        <input type="password" class="input" name="con_pass" required>
         </div>
         <br>
        <div class="input_field">
        <label>Gender</label>
        <select name="gender" required>
            <option> Select</option>
            <option> Male</option>
            <option> Female</option>
        </select>
         </div>
         <br>
         <div class="input_field">
        <label>Email</label>
        <input type="text" class="input" name="mail" required>
         </div>
         <br>
         <div class="input_field">
        <label>Phone Number</label>
        <input type="number" class="input" name="number" required>
         </div>
         <br>
         <div class="input_field">
        <label>Address</label>
        <textarea name="address" required></textarea>
        </div>
        <br>
        <div class="input_field">
        <label>Security Quest.</label>
        <select name="sq" required>
            <option>Select</option>
            <option>First School</option>
            <option>Best Friend</option>
        </select>
        </div>
<br>
         <div class="input_field">
        <label>Security Ans</label>
        <input type="password" class="input" name="sa" required>
         </div>
         
    
<br>
<div class="input_field">
    <input type="submit" value="Sign Up" class="btn" name="register">
</div>
</div>
<br>
<div class="signin">Already a User? <a href="login.php" class="link"> Sign In</div>
</div>
</form>
<div class="img"></div>



    </body>
</html>

<?php
if($_POST['register']){
    $filename=$_FILES["file"]["name"];
    $tempname=$_FILES["file"]["tmp_name"];
    $folder="images/".$filename;
    move_uploaded_file($tempname,$folder);

    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $file=$_POST['file'];
    $pass=$_POST['pass'];
    $con_pass=$_POST['con_pass'];
    $gender=$_POST['gender'];
    $mail=$_POST['mail'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $sq=$_POST['sq'];
    $sa=$_POST['sa'];


    if($userid!="" && $name!="" && $pass!="" && $con_pass!="" && $gender!="" && $mail!="" && $number!="" && $address!=""){
        $query="INSERT INTO form values('$userid','$name','$folder','$pass','$con_pass','$gender','$mail','$number','$address','$sq','$sa')";
    $data=mysqli_query($conn,$query);
    if($data){
        echo"<script>alert('Registered Successfully')</script>";
    }
    else{
        echo "Error";
    }
    }
}

?>