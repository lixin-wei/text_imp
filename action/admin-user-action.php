<?php
	require_once("../lib/mylib/db_info.php");

	$action = "";
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	echo $action;

	$gid = 0;
	if (isset($_GET['gid'])) {
		$gid = $_GET['gid'];
	}
	echo $gid;

	$group_id = 0;
	if (isset($_GET['group_id'])) {
		$group_id = $_GET['group_id'];
	}
	echo $group_id;

	$user_id = "";
	if (isset($_GET['user_id'])) {
		$user_id = $_GET['user_id'];
	}

	$email = "";
	if (isset($_GET['email'])) {
		$email = $_GET['email'];
	}

	$group_name = "";
	if (isset($_GET['group_name'])) {
		$group_name = $_GET['group_name'];
	}
//	echo $group_name;

	if ($gid == $group_id) $gid = 0;


	if ($action == "adduser") {
		$sql = "UPDATE user SET group_id='$gid' WHERE email='$email'";
		$db->query($sql);
	} else if ($action == "deluser") {
		$sql = "UPDATE user SET group_id=1 WHERE user_id='$user_id'";
		$db->query($sql);
	} else if ($action == "addauth") {
		$db->query($sql);
	} else if ($action == "delauth") {
		$db->query($sql);
	} else if ($action == "addgroup") {
		$sql = "INSERT INTO user_group(group_name) VALUES ('$group_name')";
		$db->query($sql);
	} else if ($action == "delgroup") {
		$sql = "DELETE FROM user_group WHERE group_id='$group_id'";
		$db->query($sql);
	}

?>
<script> 
	window.location = "../admin-user.php?gid=<?php echo $gid?>";
</script> 