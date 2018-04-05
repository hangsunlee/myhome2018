$(document).ready(function(){
    $("#gnb>li").mouseenter(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $("#gnb>li").mouseleave(function(){
        $(this).find(".submenu").stop().slideUp();
    });
    $("#btn_login").click(function (event) {
        event.preventDefault();
        $("#login").css("display","block");
    })
    $("#close").click(function () {
        $("#login").css("display","none");
    })
});