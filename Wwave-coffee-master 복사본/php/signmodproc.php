<?php
/******************************* 
    FILE: signmodproc.php
    회원정보수정 페이지
    23.05.16
*/
session_start();
include_once('dbconn.php');
$email = $_POST['email']; 
$name = $_POST['name'];
$telno = $_POST['telno'];
$sql = "update member set name = '$name', telno = '$telno' 
        where email = '$email' ";
if($conn->query($sql)) {
    $_SESSION['name'] = $name;
    echo "<script>alert('회원정보를 수정하였습니다.')</script>";
    echo "<script>location.replace('index.php')</script>";
}
else {
   echo "<script>alert('회원정보 수정에 오류가 있습니다')</script>";
   echo "<script>location.replace('signmodify.php')</script>";
}
?>