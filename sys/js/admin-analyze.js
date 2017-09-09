/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-21 21:57:37
 * @version $Id$
 */

$(init)

function init() {
    // 下拉菜单选择功能
    $(".dropdown-menu > li").on("click", function() {
        $(this).parent().siblings(".dropdown-toggle").children("span:eq(0)").html($(this).find("span").html());
    });
    // 删除按钮事件
    $("body").on('click', '.btn-danger', function() {
        $(this).parent().hide('slow');
    });
}