<?php
include "connect.php";?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,innitial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css">
    </head>
    <body>
        <div class='container'>
            <button  class="btn btn-primary my-5"><a href="use.php" 
            class="text-light">Add user</a></button>
            <button  class="btn btn-primary my-5"><a href="display.php" 
            class="text-light">experience employees</a></button>
<button  class="btn btn-primary my-5"><a href="freshe.php" 
            class="text-light">freshers employees</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">date of birth</th>
      <th scope="col">gender</th>
      <th scope="col">experience</th>
      <th scope="col">opertion</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from fresher";
    $result=mysqli_query($con,$sql);
    if($result)
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $phone=$row['phone'];
        $email=$row['email'];
        $password=$row['password'];
        $dateofbirth=$row['dateofbirth'];
        $gender=$row['gender'];
        $experience=$row['experience'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$phone.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$dateofbirth.'</td>
        <td>'.$gender.'</td>
        <td>'.$experience.'</td>
        <td>
        <button  class="btn btn-primary"><a href="update.php?updateid='.$id.'" 
            class="text-light">update</a></button>
        <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" 
            class="text-light">delete</a></button></td>
      </tr>';
    }
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>
