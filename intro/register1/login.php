<?php
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','','manoj');
$sql="SELECT * FROM registration where username='$username' and password='$password'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==1) {
 	echo "SUCCESS";
 	header("location:crop.html");
 	
 }
 else {
 	header("location:Login.html");
 }
 ?>

 