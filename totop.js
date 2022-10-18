// 当网页向下滑动 40px 出现"返回顶部" 按钮
window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {console.log(121);
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("dtotop").style.display = "block";
    } else {
        document.getElementById("dtotop").style.display = "none";
    }
}
 
// 点击按钮，返回顶部
function totop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}