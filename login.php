<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<body>
        <form action="index.php">
        <input type="submit" name="submit" value="Home" class="btn1">
</form>
    <div class="center">
        <h1>Login<h1>
            <form action="#" method="POST">
    <div class="form">
        <input type="text" name="username" class="textfiled" placeholder="Username">  
        <input type="password" name="password" class="textfiled" placeholder="Password">  
        <div class="forgetpass"><a href="forget_pass.php" class="link">Forgot Password ?</a></div>
        <input type="submit" name="submit" value="Sign In" class="btn">
        <div class="signup">Don't have an account? <a href="form.php" class="link"> Signup Here</div>
        </div>
</form>
    </div>

</body>
</html>
<?php
include("connection.php"); 
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pwd=$_POST['password'];
    $query="select * from form where userid='$username' && password='$pwd'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1){
        header('location:display.php');
    }
else{
    echo "<script>alert('Login was Unsuccessful')</script>";
}
}
?>