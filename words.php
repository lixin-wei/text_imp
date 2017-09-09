<?php
    require_once("lib/mylib/db_info.php");

    $app_id = 1; // The selected app ID (这里不该默认为1的，但其它地方都没写完，就将就下吧- -)
    if (isset($_GET['app'])) {
        $app_id = $_GET['app'];
    }

    class Word {
    	var $s; // string
    	var $t; // times
    }

    /* Get all app info START */
    $sql = "SELECT * FROM app";
    $result = $db->query($sql);
    
    if ($result) {
        $app_cnt = $result->num_rows;
    } else {
        $app_cnt = 0;
    }

    $app = array();
    for ($i=0; $i<$app_cnt; ++$i) {
        $app[] = $result->fetch_object();
    }
    /* Get all app info END */

    /* Get the selected app info START */
    $sql = "SELECT * FROM app WHERE app_id='$app_id'";
    $result = $db->query($sql);
    $app_cur = $result->fetch_object();
    /* Get the selected app info END */

    /* Get hot word START */
    $sql = "SELECT word, COUNT(id) AS num FROM cut_word WHERE app_id='$app_id' GROUP BY word ORDER BY num DESC";
    $result = $db->query($sql);

    if ($result) $word_cnt = $result->num_rows;
    else $word_cnt = 0;
    // if ($word_cnt > 20) $word_cnt = 100;

    $word = array();

    for ($i=0; $i<$word_cnt; ++$i) {
    	$row = $result->fetch_object();
    	$word[] = new Word();
    	$word[$i]->s = $row->word;
    	$word[$i]->t = $row->num * 71; //太少了不好看，乘一个素数
//    	echo $word[$i]->s.$word[$i]->t;
    }
    /* Get hot word END */

    require_once("foreground/words.php");
?>