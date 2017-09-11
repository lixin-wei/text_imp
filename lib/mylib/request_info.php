<?php
require_once "db_info.php";

//返回指定id请求的信息，包括是否含有时间、版本等
function get_request_info($id) {
    global $db;
    $sql = "SELECT * FROM request WHERE id = $id";
    $res = $db->query($sql)->fetch_array();
    return $res;
}