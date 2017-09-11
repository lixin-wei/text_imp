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
    //统计用户提供了哪些信息
    $request_info = array(
        "review_date" => 0,
        "version" => 0,
        "location" => 0
    );
    foreach ($table[0] as $key => $value) {
        $request_info[$key] = 1;
    }
    $sql = "INSERT INTO request(id, version, location, review_date) VALUES ($request_id, {$request_info['version']}, {$request_info['location']}, {$request_info['review_date']})";
    $db->query($sql);
    //插入评论数据
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

if($res['error'] == false) {
    $_SESSION['request_id'] = $request_id;
}
echo json_encode($res);
