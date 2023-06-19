<?php
include_once('dbconn.php'); 
$email = $_POST['email']; 
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$telno = $_POST['telno'];
$regdate = date('Y/m/d');
$stamp = 1;
$sql = "insert into member
     values('$email','$name','$pwd','$telno','$regdate',$stamp )";
if($conn->query($sql))  {
    echo "<script>alert('Wwave coffee 회원가입 성공')</script>";
    echo "<script>location.replace('index.php')</script>";
}
else {
   echo "<script>alert('회원가입에 오류가 있습니다')</script>";
   echo "<script>location.replace('signup.html')</script>";
}
?>