var $main_form = $("#main_form"),
    $file_input = $main_form.find("input[name=data]"),
    $upload_button = $("#upload_button"),
    $title_list = $("#title_list"),
    $info_box = $("#info_box");

var map = {}; //数据映射关系
var tabel = {}; //数据表

$upload_button.click(function () {
    $file_input.click();
});

//默认的select
$default_select = $("<select/>")
    .append($("<option/>", {disabled: "true", selected: "true"}).html("请选择数据域含义"))
    .append("<option value='content'>评论文本（必选）</option>")
    .append("<option value='review_date'>时间</option>")
    .append("<option value='location'>地区</option>")
    .append("<option value='version'>版本号</option>");
//提交按钮
$submit_button = $("<button/>", {
    class: "btn btn-default"
}).text("确定");

$submit_button.click(function () {
    //TODO: 处理数据，ajax提交，php响应好，加载完后跳转
    var table_to_send = [];
    table.forEach(function (row) {
        var r = {};
        for (var key in row) if(row.hasOwnProperty(key)) {
            if(map.hasOwnProperty(key)) {
                r[map[key]] = row[key];
            }
        }
        table_to_send.push(r);
    });
    console.log(table_to_send);
    $.post("action/upload-reviews.php", {
        table: table_to_send
    },function (res) {
        $info_box.empty();
        if(res.error) {
            $info_box.text(res.info);
        }
        else {
            window.location.href = "review.php?request_id=" + res.request_id;
        }
    }, "json");
});
//xls表格处理
$file_input.change(function (e) {
    var f = $(this).prop("files")[0];
    if(f !== undefined) {
        var reader = new FileReader();
        var name = f.name;
        reader.onload = function(e) {
            var data = e.target.result;
            var cfb = XLSX.read(data, {type: 'binary'});
            table = XLS.utils.sheet_to_json(cfb.Sheets[cfb.SheetNames[0]]);
            console.log(table);
            //$("#output").html(JSON.stringify(table, 2, 2));
            if(table.length) {
                $title_list.empty();
                map = {};
                for (var key in table[0]) if(table[0].hasOwnProperty(key)) {
                    //生成数据域选择的下拉框
                    var $label = $("<div/>", {class: "field-label"}).text(key);
                    var $select = $default_select.clone().attr("name", key);
                    var $temp_div = $("<div/>").append($label).append($select);
                    $title_list.append($temp_div);
                    //$select.selectpicker();
                    //注册选择事件
                    //TODO: 选择一个数据域后，禁用其他select的相应选项
                    //TODO: 把select改成dropdown，美化一下
                    $select.change(function () {
                        map[$(this).attr("name")] = $(this).val();
                        console.log(map);
                    });
                }
            }
            $title_list.append($submit_button);
        };
        reader.readAsBinaryString(f);
    }
});
