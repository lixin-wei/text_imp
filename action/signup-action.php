<?php
	require_once("../lib/mylib/db_info.php");

	$flag = 1;

	$user_name = $_GET['user_name'];
	if (strlen($user_name) < 2) {
		$flag = 0;
		echo "<script>alert('用户名太短！');</script>";
		echo "<script>window.history.go(-1);</script>";
	}

	$email = $_GET['email'];
//	echo $email;
	$sql = "SELECT * FROM user WHERE email='$email'";
//	echo $sql;
	$result = $db->query($sql);
	if ($result->num_rows>0) {
		$flag = 0;
		echo "<script>alert('该邮箱已注册！');</script>";
		echo "<script>window.history.go(-1);</script>";
	}

	$password = $_GET['pwd'];
	if (strlen($password)<6 || strlen($password)>10) {
		$flag = 0;
		echo "<script>alert('密码长度不正确！');</script>";
		echo "<script>window.history.go(-1);</script>";
	}
	$pwd_hashed = password_hash($password, PASSWORD_DEFAULT);

	if ($flag) {
		$sql = "INSERT INTO user(user_name, email, pwd, group_id) VALUES ('$user_name', '$email', '$pwd_hashed', '1')";
		// echo $sql;
		$db->query($sql);
        // 帐号默认关注 收款 喜欢 关键词
        $sql = "SELECT user_id FROM user where email = '$email'";
        $result = $db->query($sql);
        $user_id = $result->fetch_object()->user_id;
        // echo $user_id."<br />";
        $sql = "INSERT INTO follow_word VALUES(NULL, '$user_id', '收款', '$email')";
        $db->query($sql);
        $sql = "INSERT INTO follow_word VALUES(NULL, '$user_id', '喜欢', '$email')";
        $db->query($sql);
		echo "<script>alert('注册成功！');</script>";
	}
?>
<script> 
	 window.history.go(-2);
</script> 