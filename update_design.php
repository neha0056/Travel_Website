<?php include("connection.php"); 
error_reporting(0);
$id= $_GET['mail'];
$query="select * from form where email='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_form.css">
    <title>update</title>
</head>
<body>
 <div class="container">
    <form action="#" method="POST">
    <div class="title">
        Update Details 
    </div>  
<div class="form">
    <div class="input_field">
        <label>Username</label>
        <input type="text" value="<?php echo $result['userid'] ?>" class="input" name="userid" required>
        </div>
        <br>
        <div class="input_field">
        <label>Name</label>
        <input type="text" value="<?php echo $result['name'] ?>" class="input" name="name" required>
         </div>
         <br>
         <div class="input_field">
        <label>Password</label>
        <input type="password" value="<?php echo $result['password'] ?>" class="input" name="pass" required>
         </div>
         <br>
         <div class="input_field">
        <label>Confirm Password</label>
        <input type="password" value="<?php echo $result['confirm_password'] ?>" class="input" name="con_pass" required>
         </div>
         <br>
         <div class="input_field">
        <label>Gender</label>
        <select name="gender" required>
            <option> Select</option>
            <option 
            <?php
            if($result['gender']=='Male')
            {
                echo "selected";
            }
            ?>
            >
            Male</option>
            
            <option 
            <?php
            if($result['gender']=='Female')
            {
                echo "selected";
            }
            ?>
            > Female</option>
        </select>
         </div>
         <br>
         <div class="input_field">
        <label>Email</label>
        <input type="text" value="<?php echo $result['email'] ?>" class="input" name="mail" required>
         </div>
         <br>
         <div class="input_field">
        <label>Phone Number</label>
        <input type="number" value="<?php echo $result['Phone_number'] ?>" class="input" name="number" required>
         </div>
         <br>
         <div class="input_field">
        <label>Address</label>
        <textarea name="address" value="<?php echo $result['address'] ?>" required>
    <?php echo $result['address'] ?> </textarea>
</div>
<br>
        <div class="input_field">
        <label>Security Quest.</label>
        <select name="sq" required>
            <option> Select</option>
            <option
            <?php
            if($result['Security_quest']=='First School')
            {
                echo "selected";
            }
            ?>
            >First School</option>
            <option
            <?php
            if($result['Security_quest']=='Best Friend')
            {
                echo "selected";
            }
            ?>
            >Best Friend</option>
        </select>
</div>
<br>
         <div class="input_field">
        <label>Security Ans</label>
        <input type="password" value="<?php echo $result['Security_ans'] ?>" class="input" name="sa" required>
         </div>
         
    
<br>
<div class="input_field">
    <input type="submit" value="Update" class="btn" name="update">
</div>
</div>
</form>
</div>
</body>
</html>

<?php
if($_POST['update']){
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $con_pass=$_POST['con_pass'];
    $gender=$_POST['gender'];
    $mail=$_POST['mail'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $sq=$_POST['sq'];
    $sa=$_POST['sa'];

    if($userid!="" && $name!="" && $pass!="" && $con_pass!="" && $gender!="" && $mail!="" && $number!="" && $address!=""){
        $query="UPDATE form SET userid='$userid',name ='$name',password='$pass',confirm_password='$con_pass',gender='$gender',email='$mail',Phone_number='$number', address='$address', Security_quest='$sq',Security_ans='$sa'";
    $data=mysqli_query($conn,$query);
    if($data){
        echo "<script>alert('Record Updated')</script>";
        ?>
        <meta http-equiv = "refresh" content = "1; url =http://localhost/login/display.php" />
        <?php
    }
    else{
        echo "<script>alert('Error')</script>";
    }
    }
}

?>