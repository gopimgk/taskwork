<?php
include 'connect.php';
if(isset($_POST["login"])){
$uname=$_POST['name'];
$password=$_POST['password'];
if(empty($uname)){
    echo "fill uname<br>";
}
if(empty($password)){
    echo "fill password<br>";
}
//else{
$sql="Select name,password from crud";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$i=count($row);
while($row=mysqli_fetch_assoc($result)){
  if($uname==$row['name'] && $password==$row['password']){
    echo "login successful";
    break;
  }else{
    if(count($row)==($i-1)){
    echo "enter incurrect password or uname";
 }
}}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="frm">
        <form action="" method="post">
            <label for="">uname</label>
            <input type="text" name="name">
            <br><br>
            <label for="">password</label>
            <input type="text" name="password">
            <br>
            <a href="forgetpass.php">forgetpassword</a>
            <br>
            <input type="submit" name="login" class="btn"value="login">
            <a href="use.php">resistration</a>
        </form>
        <style>
            body{
                background: gray;
            }
            .frm{
                border-radius:10px;
                width:25%;
                margin:120px auto;
                background:white;
                padding:50px;
            }
            .btn{
                background:blue;
                color:white;
                margin-left:30%;
                width:70px;
                height:30px;
                border:2px solid gray;
                border-radius:10%;
            }
        </style>
    </div>
</body>
</html>