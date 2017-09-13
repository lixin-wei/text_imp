var $main_form = $("#main_form"),
    $file_input = $main_form.find("input[name=data]"),
    $upload_button = $("#upload_button"),
    $info_box = $("#info_box"),
    $data_field_selectors = $("select.data-field-select"),
    $submit_button = $("#submit_button"),
    $data_field_panel = $("#data-field-panel"),
    $reset_button = $("#reset_button"),
    $loading = $("#loading");

var map = {}; //数据映射关系
var tabel = {}; //数据表
var file_name = null;
map.delete_by_value = function (value) {
    for (var key in map) if (map.hasOwnProperty(key)) {
        if(map[key] === value) {
            delete map[key];
            break;
        }
    }
};

map.find_by_value = function (value) {
    for (var key in map) if (map.hasOwnProperty(key)) {
        if(map[key] === value) {
            return key;
        }
    }
    return null;
};

map.has_value = function (value) {
    for (var key in map) if (map.hasOwnProperty(key)) {
        if(map[key] === value) {
            return true;
        }
    }
    return false;
};
//选择文件
$upload_button.click(function () {
    $file_input.click();
});
//选择文件按钮，鼠标悬停时改变内容
$upload_button.hover(function () {
    $(this).text("选择文件");
}).mouseout(function () {
    if (file_name !== null) {
        $(this).text(file_name);
    }
});
//初始化select
$data_field_selectors.selectpicker({
    width: "100%"
});
//重新选择文件
$reset_button.click(function () {
    //$upload_button.fadeIn();
    //$data_field_panel.fadeOut();
});
//最终的提交
$submit_button.click(function () {
    // 检查content域是否已经选择
    if(!map.has_value("content")) {
        $info_box.text("请选择评论文本所对应的数据域！");
        return;
    }
    // 处理数据，ajax提交，php响应好，加载完后跳转
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
    //显示加载遮罩层
    $loading.show();
    $.post("action/upload-reviews.php", {
        table: table_to_send
    },function (res) {
        //去除加载遮罩层
        $loading.hide();
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
        file_name = f.name;
        reader.onload = function(e) {
            var data = e.target.result;
            var cfb = XLSX.read(data, {type: 'binary'});
            table = XLS.utils.sheet_to_json(cfb.Sheets[cfb.SheetNames[0]]);
            console.log(table);
            //$("#output").html(JSON.stringify(table, 2, 2));
            if(table.length) {
                $data_field_selectors.empty();
                var $option = $("<option/>").val("").text("空置");
                $data_field_selectors.append($option);
                for (var key in table[0]) if(table[0].hasOwnProperty(key)) {
                    //给select填充数据表中的标题
                    $option = $("<option/>").val(key).text(key);
                    $data_field_selectors.append($option);
                }
            }
            $data_field_selectors.removeAttr("disabled");
            $data_field_selectors.selectpicker("refresh");
            $upload_button.text(file_name);
            $file_input.val("");
        };
        reader.readAsBinaryString(f);
    }
});

//数据域select的选中事件
$data_field_selectors.change(function () {
    var name = $(this).attr("name");
    var val = $(this).val();
    var origin_item = map.find_by_value(name);
    //则删除原有映射
    map.delete_by_value(name);
    //添加相应映射
    if(val !== "")
        map[val] = name;
    //解除其他下拉框里的禁用
    if(origin_item !== null) {
        $("option[value="+ origin_item +"]").removeAttr("disabled");
    }
    //禁用其他下拉框的相应选项
    if (val !== "") {
        $("option[value="+ val +"]").attr("disabled", "true");
        $(this).find("option[value="+ val +"]").removeAttr("disabled");
        $(this).val(val);
    }
    $data_field_selectors.selectpicker("refresh");

    console.log(map);
});