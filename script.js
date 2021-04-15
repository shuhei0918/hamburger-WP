$(function(){
    $('input[name="c-menu"]').change(function(){

        var open = $('#c-menu__open').prop('checked');
        var close = $('#c-menu__close').prop('checked');

        if(open){
            $('.l-sidebar').toggleClass("is-open")
            $('.l-header').toggleClass("is-open")
            $('.l-main').toggleClass("is-open")
            $('.l-footer').toggleClass("is-open")
        }else{
            $('.l-sidebar').removeClass("is-open")
            $('.l-header').removeClass("is-open")
            $('.l-main').removeClass("is-open")
            $('.l-footer').removeClass("is-open")
        }
    });
});