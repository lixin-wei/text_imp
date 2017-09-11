<?php
require_once "lib/mylib/request_check.php";
require_once("lib/mylib/db_info.php");


/* Get URL parameter START */
$gid = 0; // group_id of member module
if (isset($_GET['gid'])) {
    $gid = $_GET['gid'];
}
if ($gid) {
    $sql = "SELECT group_name FROM user_group WHERE group_id='$gid'";
    $result = $db->query($sql);
    $gname1 = $result->fetch_object()->group_name;
} else {
    $gname1 = "所有用户";
}
/* Get URL parameter END */


/* Get user START */
class User {
    var $id;
    var $name;
    var $email;
    var $group_id;
}
$user = array();

$sql = "SELECT * FROM user";
$result = $db->query($sql);
$user_cnt = $result->num_rows;

for ($i=0; $i<$user_cnt; ++$i) {
    $user[] = new User();
    $row = $result->fetch_object();
    $user[$i]->id = $row->user_id;
    $user[$i]->name = $row->user_name;
    $user[$i]->email = $row->email;
    $user[$i]->group_id = $row->group_id;
}
/* Get user END */


/* Get group START */
class Group {
    var $id;
    var $name;
}
$group = array();

$sql = "SELECT * FROM user_group";
$result = $db->query($sql);
$group_cnt = $result->num_rows;

for ($i=0; $i<$group_cnt; ++$i) {
    $group[] = new Group;
    $row = $result->fetch_object();
    $group[$i]->id = $row->group_id;
    $group[$i]->name = $row->group_name;
}
/* Get group END */

require_once("foreground/admin-user.php");