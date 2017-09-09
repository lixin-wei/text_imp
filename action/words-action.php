<?php
    require_once("../lib/mylib/db_info.php");
    
    if(isset($_POST['hotword'])) {
        class Word {
            var $name;
            var $value;
        }
        $wordlist = array();
        // 获取热词名
        $hotword = $_POST['hotword'];
        // 查询数据库
        $sql = "select location, count(location) as num from app_imp.review 
        where review_id in 
        (select review_id from app_imp.cut_word where word = '".$hotword."')
         group by location ORDER BY num DESC";
        $result = $db->query($sql);
        if ($result) $rows_cnt = $result->num_rows;
        else $rows_cnt = 0;
        // 提取数据
        for ($i=0; $i<$rows_cnt; $i++) {
            $row = $result->fetch_object();
            $wordlist[] = new Word();
            $wordlist[$i]->name = $row->location;
            $wordlist[$i]->value = intval($row->num) * 71;//太少了不好看，乘一个素数
        }
        // 返回 json
        echo json_encode($wordlist);
    }
?>