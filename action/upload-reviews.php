<?php
require_once "../lib/mylib/db_info.php";
$table = $_POST['table'];


//获取本次分析的id
$sql = "SELECT MAX(request_id) FROM review";
$request_id = $db->query($sql)->fetch_array()[0] + 1;

//构建插入的sql语句
$res = array(
    "error" => false,
    "info" => "",
    "request_id" => $request_id
);
if (count($table)) {
    foreach ($table as $row) {
        $pre = "";
        $end = "";
        $first = true;
        foreach ($row as $key => $value) {
            if($first) $first = false;
            else {
                $pre .= ",";
                $end .= ",";
            }
            $pre .= $db->real_escape_string($key);
            $end .= "\"".$db->real_escape_string($value)."\"";
        }
        $pre .= ",request_id, label_id, sentiment_id";
        $end .= ",$request_id, -1, -1";
        $sql = "INSERT INTO review($pre) VALUES ($end)";
        $db_res = $db->query($sql);
        if(!$db_res) {
            $res['error'] = true;
            $res['info'] = $db->error;
            break;
        }
    }
}
else {
    $res['error'] = true;
    $res['info'] = "数据为空";
}

echo json_encode($res);
