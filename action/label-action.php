<?php
require_once("../lib/mylib/db_info.php");
if(isset($_GET['by'])) {
    $by = $_GET['by'];
    if($by=='id') {
        $id = $db->real_escape_string($_GET['id']);
        $sql = "SELECT count(*) FROM review WHERE label_id = '$id'";
        //var_dump($sql);
        $res = $db->query($sql);
        echo $res->fetch_array()[0];
    }
    else if($by == 'date-id') {
        $date = $db->real_escape_string($_GET['date']);
        $id = $db->real_escape_string($_GET['id']);
        $sql = "SELECT count(*) FROM review WHERE review_date = '$date' AND label_id='$id'";
        //var_dump($sql);
        $res = $db->query($sql);
        echo $res->fetch_array()[0];
    }
}