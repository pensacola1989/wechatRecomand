$(document).ready(function(){
    $('.menu_area ul li')
        .first()
        .click(function(){
            $('.wc_category').slideToggle();
        });
})