$(document).ready(function() {
    $('.register').hide();
    $('.login').hide();
    $('.more').click(function() {
        $('.register').classList.toggle('toggle-show');
        $('.login').classList.toggle('toggle-show');
    });
    $('.toggle-show').show();
});