$(document).ready(function () {

    $("#b1").click(function () {
        $("#div2").slideDown("slow");
    });

    $("#b2").click(function () {
        $("#div3").slideDown("slow");
    });

    $("#b3").click(function () {
        $("#div4").slideDown("slow");
    });

    $("#b4").click(function () {
        $("#div4").slideUp("fast");
        $("#div3").slideUp("fast");
        $("#div2").slideUp("fast");
        $("#div1").slideUp("fast");
        $("#div1").slideDown("fast");
    });

});
