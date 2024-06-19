<?php
include("connection.php");
$id= $_GET['mail'];
$query="delete from form where email='$id'";
$data=mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv = "refresh" content = "1; url =http://localhost/login/display.php" />
    <?php
}
else{
    echo "Error";
}

?>