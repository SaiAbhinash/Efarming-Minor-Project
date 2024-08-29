<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $conn= new mysqli('localhost','root','','manoj');
  if($conn->connect_error) {
       die('connection failed:'.$conn->connect_error);
  }
  else {
    $a = $conn->prepare("insert into registration values(?,?,?,?,?)");
    $a->bind_param("sssss",$username,$email,$password,$mobile,$address);
    $a->execute();
    echo "inserted successfully";
    $a->close();
    $conn->close();
  }
?>