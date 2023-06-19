<?php
session_start();
include_once('dbconn.php');

if (!empty($_POST['pwd']) && !empty($_POST['new_pwd'])) {
    $pwd = $_POST['pwd'];
    $new_pwd = $_POST['new_pwd'];
    $sql = "UPDATE member SET pwd = '$pwd' WHERE email = '{$_SESSION['email']}'";
	
	// 비밀번호 불일치
    if ($pwd != $new_pwd) { 
        echo "<script>alert('비밀번호가 일치하지 않습니다.')</script>";
        echo "<script>location.replace('passwordreset.php')</script>";
    } 
	// 비밀번호 일치
	elseif ($conn->query($sql)) { 
        $_SESSION['pwd'] = $pwd;
        echo "<script>alert('비밀번호를 수정하였습니다.')</script>";
        echo "<script>location.replace('signmodify.php')</script>";
    } 
	// 쿼리 실행 실패
	else { 
        echo "<script>alert('비밀번호 수정에 오류가 있습니다.')</script>";
        echo "<script>location.replace('passwordreset.php')</script>";
    }
} else {
    echo "<script>alert('비밀번호를 입력해주세요.')</script>";
    echo "<script>location.replace('passwordreset.php')</script>";
}
?>
