<?php
	require_once("../lib/mylib/db_info.php");
    
	$email = $_GET['email'];
    $password = $_GET['pwd'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
    	$row = $result->fetch_object();
    	if (password_verify($password, $row->pwd)) {
	    	$_SESSION['user_id'] = $row->user_id;
	    	$_SESSION['user_name'] = $row->user_name;
	    	echo "<script>window.location='../index.php';</script>";
	    	echo $_SESSION['user_id'];
	    } else {
	    	echo "<script>alert('密码不正确！');</script>";
			echo "<script>window.history.go(-1);</script>";
	    }
    } else {
    	echo "<script>alert('用户名不存在！');</script>";
		echo "<script>window.history.go(-1);</script>";
    }
?>