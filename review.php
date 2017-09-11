<?php
require_once "lib/mylib/request_check.php";
require_once("lib/mylib/db_info.php");
require_once "lib/mylib/request_info.php";

$request_id = $_SESSION['request_id'];
$location = "";
if (isset($_GET['location'])) { // country
    $location = $_GET['location'];
}

$version = "";
if (isset($_GET['version'])) { // version
    $version = $_GET['version'];
}

$rate = 0;
if (isset($_GET['rate'])) { // rate
    $rate = $_GET['rate'];
}

$app_id = 1;
if (isset($_GET['app_id'])) { // app
    $app_id = $_GET['app_id'];
}

$page = 1;
if(isset($_GET['page'])) {
    $page = intval($_GET['page']);
}
/* Get review START */
$date_start = null;
if(isset($_GET['date_start'])) {
    $date_start = $_GET['date_start'];
}
$date_end = null;
if(isset($_GET['date_end'])) {
    $date_end = $_GET['date_end'];
}

//获取request信息
$request_info = get_request_info($request_id);
//筛选语句
$where = "WHERE request_id = $request_id";
if ($location != "") $where.=" AND review.location = '$location'";
if ($version != "") $where.=" AND review.version = '$version'";
//$where.=" AND review.app_id = $app_id";
if ($date_start) $where.=" AND review.review_date >= '$date_start'";
if ($date_end) $where.=" AND review.review_date <= '$date_end'";
//分页相关
$items_per_page = 10;
$sql = "SELECT COUNT(*) FROM review $where";
$tot_review_cnt = $db->query($sql)->fetch_array()[0];
//总页数
$page_cnt = floor($tot_review_cnt / $items_per_page);
if($tot_review_cnt%$items_per_page)$page_cnt++;
//处理非法页数
$page = max(1, $page);
$page = min($page_cnt, $page);
//分页按钮的区间
$pagination_len = 6;//必须为偶数
$pagination_left = max($page - $pagination_len/2, 1);
$pagination_right = min($page + $pagination_len/2, $page_cnt);
$pagination_pre = max(1, $page - 1);
$pagination_next = min($page_cnt, $page + 1);
//除了分页参数外的url,需合并所有GET
$url_root = "review.php?";
foreach ($_GET as $key => $value) {
    if($key != 'page')
        $url_root.="$key=$value&";
}
//sql的起始下标
$sql_start = ($page-1) * $items_per_page;
$sql = <<<SQL
SELECT
review_id,
author,
title,
content,
review_date,
lang,
rate,
location,
version,
store,
review.label_id,
labels.text as label,
review.sentiment_id,
sentiments.text as sentiment
FROM
review
LEFT JOIN labels ON labels.label_id = review.label_id
LEFT JOIN sentiments ON sentiments.sentiment_id = review.sentiment_id
$where
ORDER BY review_id
LIMIT $sql_start, $items_per_page
SQL;
$result = $db->query($sql);

if ($result) $review_cnt = $result->num_rows;
else $review_cnt = 0;

$review = array();
$cut_words = array();
$cut_words_str = array();

for ($i=0; $i<$review_cnt; ++$i) {
    $review[] = $result->fetch_object();
    $rid = $review[$i]->review_id;
    $rev_sql = "SELECT word FROM cut_word WHERE review_id='$rid'";
    $rev_result = $db->query($rev_sql);

    if ($rev_result) $cut_words_cnt = $rev_result->num_rows;
    else $cut_words_cnt = 0;

    $cut_words[] = array();
    $cut_words_str[$i] = "";
    for ($j=0; $j<$cut_words_cnt; ++$j) {
        $rev_row = $rev_result->fetch_object();
        $cut_words[$i][] = $rev_row->word;
        if ($j) $cut_words_str[$i] .= ",".$rev_row->word;
        else $cut_words_str[$i] .= $rev_row->word;
    }
}
/* Get review END */

//分类标签列表
$sql = "SELECT label_id, text FROM labels";
$label_list = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
//情感标签列表
$sql = "SELECT sentiment_id, text FROM sentiments";
$sentiment_list = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
//版本列表
$sql = "SELECT DISTINCT version FROM review WHERE request_id=$request_id AND version IS NOT NULL";
$version_list = $db->query($sql)->fetch_all(MYSQLI_NUM);
//省份列表
$sql = "SELECT DISTINCT location FROM review WHERE request_id=$request_id AND location IS NOT NULL";
$location_list = $db->query($sql)->fetch_all(MYSQLI_NUM);

require_once("foreground/review.php");
