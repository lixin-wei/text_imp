<?php
require_once("../lib/mylib/db_info.php");
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	session_destroy();
	echo "<script>window.location='../login.php';</script>";
?>