<?php
$con=mysqli_connect("localhost","root","");
$db='create database gopi';
$result=mysqli_query($con,$db);
if($result){
    echo "create";
}else{
echo "not connect";
}
