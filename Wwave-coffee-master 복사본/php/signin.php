<?php
session_start();
include_once('dbconn.php');
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql = "select * from member where  
     email = '$email'and pwd = '$pwd'"; 
$recordset = $conn->query($sql);
if(isset($recordset) && $recordset->num_rows == 1) {
    $row = $recordset->fetch_assoc();
    $name = $row['name'];
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    echo "<script>alert('로그인 성공하였습니다.')</script>"; 
    echo "<script>location.replace('index.php')</script>";
}
else {
    echo "<script>alert('아이디 또는 패스워드가 일치하지 않습니다.')</script>"; 
    echo "<script>location.replace('signin.html')</script>";
}
?>