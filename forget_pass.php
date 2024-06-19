<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="forget_pass.css">
</head>
<body>
<body>
        <form action="index.php">
        <input type="submit" name="submit" value="Home" class="btn1">
</form>
    <div class="center">
        <h1>Authenticate<h1>
            <form action="#" method="POST">
    <div class="form">
    <div class="sq">
        <select name="sq" required>
            <option>Select Security Question</option>
            <option>First School</option>
            <option>Best Friend</option>
        </select>
</div> 
<br> 
        <input type="password" name="sa" class="textfiled" placeholder="Security answer">
        <br>  
        <input type="submit" name="submit" value="Reset" class="btn">
        </div>
</form>
    </div>

</body>
</html>
<?php
include("connection.php"); 
if(isset($_POST['submit'])){
    $sq=$_POST['sq'];
    $sa=$_POST['sa'];
    $query="select * from form where Security_quest='$sq' && Security_ans='$sa'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1){
        echo "Authenticate Successfully";
    }
else{
    echo "<script>alert('Login was Unsuccessful')</script>";
}
}
?>