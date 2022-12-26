<?php
session_start();
include 'connect.php';
if($_POST['submit']){
$email=$_POST['email'];
if(empty($email)){
    echo "fill the mail";
}
else{
$sql="select email from crud where email='$email'";
$result=mysqli_query($con,$sql);
if($result){
    $subj="otp send";
    $msg1=rand(100000,999999);
    $header="from:gopi@gmail.com";
   /*$msg=mail($result,$subj,$msg1,$header);
    if($msg){
       echo "<form action='' method='post'>
       <label for=''>please enter emailverification code</label>
       <input type='text' class='' >
       <input type='submit' name='evalue'>
       </form>";
    }
    if($subj==$_POST['evalue']){
        echo "<form action='' method='post'>
        <label for=''>create new password</label>
        <input type='text' class=''>
        <input type='submit' name='newpass' id=''>
        </form>";
        $passwod=$_POST['newpass'];
    $sql1="update crud set password='$passwod' where email='$email'";
    $resul=mysqli_query($con,$sql1);
    if($resul){
        echo "updte successfull";
    }else{
        die(mysqli_error($con));
    }}*/
    }
}
}
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
    <div>
        <form action=""method='post'class="em">
            <label for="">Enter your email</label>
            <input type="email" name='email'><br><br>
           <input type="submit" name="submit">
        </form>
    </div>
    <?php
    //echo $_SESSION["name"];
?>
    </body>
<style>
.em{
    width:300px;
    height:150px;
    margin-left:35%;
    margin-top:10%;
    background:gray;
    padding-left:8%;
    padding-top:5%;
    border-radius:5%;}
    .em input[type=email]{
        width:150px;
        height:25px;
        border-radius:5px;
       
    }
    .em input[type=submit]{
        margin-left:20%;
        background:white;
        width:90px;
        height:25px;
        border-radius:10%;
        border:1px solid black;
    }
</style>
</html>