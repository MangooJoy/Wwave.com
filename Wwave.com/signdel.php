<?php
session_start();
include_once('dbconn.php');
$email = $_SESSION['email'];
$sql = "delete from member where email = '$email'";
if($conn->query($sql)) {
    session_destroy();
    echo "<script>alert('회원탈퇴 처리하였습니다.')</script>";
    echo "<script>location.replace('index.php')</script>";
}
else {
   echo "<script>alert('회원탈퇴 처리에 오류가 있습니다')</script>";
   echo "<script>location.replace('index.php')</script>";
}
?>