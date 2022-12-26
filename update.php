<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];
$password=$row['password'];
echo $row['name'];
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="update crud set id='$id',name='$name',phone='$phone',email='$email',
    password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "update successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }   
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,innitial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css">
    </head>
    <body>
        <div class="container">
        <form method="post">
            <div class="form-group">
            <label>name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
            </div><br>
            <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" name="phone"value="<?php echo $phone;?>">
            </div><br>
            <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="email"value=<?php echo $email;?>>
            </div><br>
            <div class="form-group">
            <label>password</label>
            <input type="text" class="form-control" name="password"value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >update</button>
        </form>
        </div>
    </body>
</html>