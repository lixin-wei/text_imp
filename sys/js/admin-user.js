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
    // 添加平滑效果
    // Add smooth scrolling on all links inside the navbar
    $(".nav-stacked a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });

        } // End if

    });
    // 删除按钮事件
    $("body").on('click', '.btn-danger', function() {
        $(this).parent().hide('slow');
    });
}