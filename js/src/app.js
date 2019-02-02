$(function() {
    var header = $(".navbar");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
            header.removeClass("scrolledAgain");
        } else {
            header.removeClass("scrolled");
            header.addClass("scrolledAgain");
        }
    });

});

$(function() {
    $(".dogs-gallery li img").click(function(){
        $('.dogs-gallery__photo--main').attr('src',$(this).attr('src').replace());
       
    });
});
