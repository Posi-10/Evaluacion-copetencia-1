$(document).ready(function() {
    $('#btn-menu').click(function() {
        if ($('.btn-menu span i').attr('class') == 'fas fa-bars') {
            $('.btn-menu span i').removeClass('fas fa-bars').addClass('fas fa-times');
            $('.btn-duda span i').removeClass('fas fa-question-circle').addClass('1');
            $('.full-menu').css({ 'bottom': '0' });
            $('.btn-duda span a h1').css({ 'color': 'transparent' })
        } else {
            $('.btn-menu span i').removeClass('fas fa-times').addClass('fas fa-bars');
            $('.btn-duda span i').removeClass('1').addClass('fas fa-question-circle');
            $('.full-menu').css({ 'bottom': '-100%' });
            $('.btn-duda span a h1').css({ 'color': '#F20A72' })
        }
    });
});