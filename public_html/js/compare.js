//Enables Smooth Scrolling
$(document).scroll(function() {
    var yaxis = $(document).scrollTop(),
        sidebar = $("#sidebar");
    if(yaxis >= 120)  {
        sidebar.addClass("fixed-bar");
    } else {
        sidebar.removeClass("fixed-bar");
    }
});

//ADD TOOL TIP
$(function () {
    $('[data-toggle="tooltip"]').tooltip(false)
});

//Enables Smooth Scrolling
$(document).ready(function(){
    $('.flex-icons a[href^="#"], .solid-button').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing', function () {
            window.location.hash = target;
        });
    });
});

//Enables Modal
$('#results-modal').on('shown.bs.modal', function () {

});