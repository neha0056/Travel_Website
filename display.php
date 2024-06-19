<html>
    <style>
        body{
            background-color: black;
        }
        table{
            background-color: white;
            color: black;
        }
        .update{
            background-color: green;
            color: white;
            border: 0;
            border-radius: 3px;
            cursor: pointer;
            width:100%;
            height:40px;
            margin: 10px auto;
            font-weight:700;
        }
        .delete{
            background-color: orange;
            color: white;
            border: 0;
            border-radius: 3px;
            cursor: pointer;
            width:100%;
            height:40px;
            margin: 10px auto;
            font-weight:700;
        }
    .btn{
    padding:5px 5px;
    margin-top: 15px;
    border-radius: 3px;
    background-color: white ;
    color: black;
    font-size: 15px;
    border: 0px;
    font-weight:700;
    cursor: pointer;
}
        
        </style>
        <body>
        <form action="index.php">
        <input type="submit" name="submit" value="Sign out" class="btn">
</form>
    </body>
    </html>
<?php
include("connection.php");
$query="select * from form";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0){
    ?>
    <h2 align="center"> All Records </h2>
    <table border="3px" align="center" width="80%" >
        <tr>
        <th>Username </th>
        <th>Name </th>
        <th>Image </th>
        <th>Gender </th>
        <th>Email </th>
        <th>Phone Number </th>
        <th>Address</th>
        <th>Security Question</th>
        <th>Security Answer</th>
        <th>Operations</th>
</tr>

    <?php
    while($result=mysqli_fetch_assoc($data)){
       echo "<tr>
       <td>".$result['userid']."</td>
       <td>".$result['name']."</td>
       <td><img src='".$result['image']."' height='100px' width='100px'></td>
       <td>".$result['gender']."</td>
       <td>".$result['email']."</td>
       <td>".$result['Phone_number']."</td>
       <td>".$result['address']."</td>
       <td>".$result['Security_quest']."</td>
       <td>".$result['Security_ans']."</td>
       <td><a href='update_design.php?mail=$result[email]'><input type='submit' value='Update' class='update'></a>
       <a href='delete.php?mail=$result[email]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
       </tr>";
    }
    
}
else{
    echo "No Records Found";
}
?>
</table>
<script>
    function checkdelete(){
        return confirm('Are You Sure You Want To Delete This Record ?');
    }
    </script>


