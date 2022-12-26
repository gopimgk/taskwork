<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $experience=$_POST['experience'];
    $from=$_POST["from"];
    $to=$_POST["to"];
    if(empty($_POST['experience'])){
    $sql="INSERT INTO fresher (name,phone,email,password,dateofbirth,gender,experience,From,To) 
    VALUES ('$name','$phone','$email','$password','$dateofbirth','$gender','$experience','$from','$to')";
    $result=mysqli_query($con,$sql);
    }else{
    $sql="INSERT INTO crud (name,phone,email,password,dateofbirth,gender,experience) 
    VALUES ('$name','$phone','$email','$password','$dateofbirth','$gender','$experience')";
    $result=mysqli_query($con,$sql);
    }
    if($result){
        echo "data insert successfull";
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
            <input type="text" class="form-control" name="name">
            </div><br>
            <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" name="phone">
            </div><br>
            <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="email">
            </div><br>
            <div class="form-group">
            <label>password</label>
            <input type="text" class="form-control" name="password">
            </div><br>
            <div class="form-group">
            <label>date of birth</label>
            <input type="date" class="form-control" name="dateofbirth">
            </div><br>
            <div class="form-group">
            <label>gender</label>
            <input type="radio" class="" name="gender" value="male">male
            <input type="radio" class="" name="gender" value="female">femle
            <input type="radio" class="" name="gender" value="other">other
            </div><br>
            <div class="form-group">
            <label>experience</label>
            <input type="text" class="form-control" name="experience">
            from<input type="date" class="#" name="from">
            to<input type="date" class="#" name="to">
            </div><br>

            <button type="submit" class="btn btn-primary" name="submit" >submit</button>
        </form>
        </div>
    </body>
</html>