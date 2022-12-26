<?php
include "connect.php";
$sql="create table if not exists gk(
    id int(20) not null auto_increment,
    name varchar(25) not null,
    phone int(10) not null,
    email text(25) not null,
    primary key(id))";
    $result=mysqli_query($con,$sql);
    if($result){
       echo "connect";
    }else{
        echo "not connect";
        die(mysqli_error($con));
    }