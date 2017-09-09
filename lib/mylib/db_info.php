<?php
	@session_start();
	error_reporting(E_ALL^E_NOTICE);
	$db = new mysqli("localhost", "root", "", "app_imp");
	if($db->connect_errno)
    	die('Could not connect: ' . $db->connect_error);
	$db->query("set names utf8mb4");
	$db->query("SET time_zone ='+8:00'");



?>