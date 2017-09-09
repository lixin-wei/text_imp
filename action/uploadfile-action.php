<?php
    header('Content-Type: text/plain; charset=utf-8');
    ini_set('memory_limit', '1024M');
    ini_set("magic_quotes_runtime",0); 
    require_once("../lib/mylib/db_info.php");
    require_once ("../lib/PHPExcel/PHPExcel.php");
    require_once ("../lib/PHPExcel/PHPExcel/IOFactory.php");
    require_once ("../lib/PHPExcel/PHPExcel/Cell.php");
    require_once ("../lib/jieba/vendor/multi-array/MultiArray.php");
    require_once ("../lib/jieba/vendor/multi-array/Factory/MultiArrayFactory.php");
    require_once ("../lib/jieba/class/Jieba.php");
    require_once ("../lib/jieba/class/Finalseg.php");
    require_once ("../lib/phpmailer/class.phpmailer.php"); 
    use Fukuball\Jieba\Jieba;
    use Fukuball\Jieba\Finalseg;
    Jieba::init();
    Finalseg::init();
 
    function sendMail($to, $word, $times) {
        try {
            // var $to;
            //echo "word:".$word;
            // echo "times:".$times;
            $mail = new PHPMailer(true); 
            $mail->IsSMTP(); 
            $mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码 
            $mail->SMTPAuth = true; //开启认证 
            $mail->Port = 25; 
            $mail->Host = "smtp.163.com"; 
            $mail->Username = "appimpression@163.com"; 
            $mail->Password = "auth163"; 
            //$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could not execute: /var/qmail/bin/sendmail ”的错误提示 
            // $mail->AddReplyTo("@qq.com","mckee");//回复地址 
            $mail->From = "appimpression@163.com"; 
            $mail->FromName = "appimpression@163.com"; 
            $mail->AddAddress($to); 
            $mail->Subject = "关键词「".$word."」超过阈值！"; 
            $mail->Body = "尊敬的用户，您好：您在App 印象系统中关注的关键词[".$word."]出现次数已达".$times."，超过阈值，若需进一步了解，请登录系统查看。"; 
            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略 
            $mail->WordWrap = 80; // 设置每行字符串的长度 
            //$mail->AddAttachment("f:/test.png"); //可以添加附件 
            $mail->IsHTML(true); 
            $mail->Send(); 
            // echo '邮件已发送'; 
        } catch (phpmailerException $e) { 
        echo "邮件发送失败：".$e->errorMessage(); 
        } 
    }



try {
   
    /* Upload file START */

    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if (
        !isset($_FILES['upfile']['error']) ||
        is_array($_FILES['upfile']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here.
    if ($_FILES['upfile']['size'] > 10000000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    // $finfo = new finfo(FILEINFO_MIME_TYPE);
    // if (false === $ext = array_search(
    //     $finfo->file($_FILES['upfile']['tmp_name']),
    //     array(
    //         'jpg' => 'image/jpeg',
    //         'png' => 'image/png',
    //         'gif' => 'image/gif',
    //         'xls' => 'upload/xls'
    //     ),
    //     true
    // )) {
    //     throw new RuntimeException('Invalid file format.');
    // }
    $file_name = sha1_file($_FILES['upfile']['tmp_name']);
    $ext = "xlsx";


    // You should name it uniquely.
    // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.
    $rootpath = $_SERVER['DOCUMENT_ROOT']."/app/upload";
    if (!move_uploaded_file(
        $_FILES['upfile']['tmp_name'],
        sprintf($rootpath.'\%s.%s',
            $file_name,
            $ext
        )
    )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }

    // echo 'File is uploaded successfully.';

    /* Upload file END */




    /* Get information from file and insert them into database START */

    $file = $rootpath."/".$file_name.".".$ext;

    $reader = PHPExcel_IOFactory::createReader('excel2007');
    $PHPExcel = $reader->load($file);
    $worksheet = $PHPExcel->getActiveSheet();
    $highestRow = $worksheet->getHighestRow(); // 取得总行数
    $highestColumn = $worksheet->getHighestColumn(); // 取得总列数

    $arr = array(1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D', 5 => 'E', 6 => 'F', 7 => 'G', 8 => 'H', 9 => 'I', 10 => 'J', 11 => 'K', 12 => 'L', 13 => 'M', 14 => 'N', 15 => 'O', 16 => 'P', 17 => 'Q', 18 => 'R', 19 => 'S', 20 => 'T', 21 => 'U', 22 => 'V', 23 => 'W', 24 => 'X', 25 => 'Y', 26 => 'Z');

    $sql = "SELECT MAX(review_id) AS max_id FROM review";
    $result = $db->query($sql);
    if ($result) {
        $row = $result->fetch_object();
        $max_id = $row->max_id;
    } else {
        $max_id = -1;
    }

    $flag = 0;
    for ($row = 2; $row <= $highestRow; $row++) {
            $app_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
            $author = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
            $title = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $content = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
            $review_date = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
            $sentiment = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
            $lang = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
            $rate = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
            $location = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
            $version = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
            $store = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
            // echo $app_id. $author. $title. $content. $review_date. $sentiment. $lang. $rate. $location. $version. $store;
            $sql = "INSERT INTO review(app_id, author, title, content, review_date, sentiment, lang, rate, location, version, store) VALUES ('$app_id', '$author', '$title', '$content', '$review_date', '$sentiment', '$lang', '$rate', '$location', '$version', '$store')";
            $db->query($sql);


            /* Get the cut words START */
            $seg_list = Jieba::cut($content);
            if ($max_id < 0) {
                $sql = "SELECT MAX(review_id) AS max_id FROM review";
                $result = $db->query($sql);
                $row = $result->fetch_object();
                $max_id = $row->max_id;
            }
            foreach ($seg_list as $word) {
                $sql = "INSERT INTO cut_word(word, review_id, app_id) VALUES ('$word', '$max_id', '$app_id')";
                $db->query($sql);

                $sql = "SELECT COUNT(*) AS num FROM cut_word WHERE word='$word'";
                $result = $db->query($sql);
                $row = $result->fetch_object();
                $num = $row->num;
                // echo $word.":".$num."<br>";
                
                if ($num > 20 && $word == '收款') { // 阈值
                    $sql = "SELECT email FROM follow_word WHERE word='$word'";
                    $email_result = $db->query($sql);
                    // echo $sql."<br>";
                    
                    // if ($email_result) {
                    //     $rows_cnt = $result->num_rows;
                    // } else {
                    //     $rows_cnt = 0;
                    // }
                    // for ($i=0; $i<$rows_cnt; ++$i) {
                    //     $row = $result->fetch_object();
                    //     $email = $row->email;
                    //     echo $email;
                    //     // sendMail($email, $word, $num);
                    // }
                    if ($email_result) {
                        // echo "in result.";

                        while ($row = $email_result->fetch_object()) {
                            $email = $row->email;
                            // echo $email;
                            sendMail($email, $word, $num);
                        }
                    }
                }
            }
            /* Get the cut words END */


    }


    /* Get information from file and insert them into database END */
    // 删除异常数据
    // $sql = "DELETE FROM cut_word where word = ' '";
    // $db->query($sql);
    // 返回上一页
    echo "数据上传成功!";  




} catch (RuntimeException $e) {

    echo $e->getMessage();

}
?>