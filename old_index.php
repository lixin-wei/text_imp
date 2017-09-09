<?php
    require_once("lib/mylib/db_info.php");

    $store = "All";
    if (isset($_GET['store'])) {
        $store = $_GET['store'];
    }


    class App {
        var $id;
        var $name;
        var $store;
        var $icon;
        var $rate;
    }

    $sql = "SELECT * FROM app";
    $result = $db->query($sql);

    if ($result) $rows_cnt = $result->num_rows;
    else $rows_cnt = 0;

    $app = array();

    for ($i=0; $i<$rows_cnt; $i++) {
        $row = $result->fetch_object();
        $app[] = new App();
        $app[$i]->id = $row->app_id;
        $app[$i]->name = $row->app_name;
        $app[$i]->store = $row->store;
        $app[$i]->icon = $row->icon;
        $sql_rate = "SELECT AVG(rate) AS rate FROM review WHERE app_id=".$app[$i]->id;
        $result_rate = $db->query($sql_rate);
        $app[$i]->rate = round($result_rate->fetch_object()->rate, 1);
    }

    require_once("foreground/index.php");
?>