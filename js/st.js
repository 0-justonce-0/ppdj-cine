$(document).ready(function () {
    var x = document.getElementsByClassName("display-src").value;
    $('.div1').hide();
    $('.div2').hide();
    $('.div3').hide();
    $('.div4').hide();
    $('.find-btn').click(function() {
        if(x == "shape") {
            $('.div1').show();
        $('.div2').hide();
        $('.div3').hide();
        $('.div4').hide();
        } else if (x == "incep") {
            $('.div1').hide();
            $('.div2').show();
            $('.div3').hide();
            $('.div4').hide();
        } else if (x == "dun") {
            $('.div1').hide();
            $('.div2').hide();
            $('.div3').show();
            $('.div4').hide();
        } else if (x == "dark") {
            $('.div1').hide();
            $('.div2').hide();
            $('.div3').hide();
            $('.div4').show();
        }
    });
});