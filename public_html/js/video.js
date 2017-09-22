var parties = $(".fill");
for(var i = 0; i < parties.length; i++){
    var target = Math.floor(Math.random() * parties.length -1) + 1;
    var target2 = Math.floor(Math.random() * parties.length -1) +1;
    parties.eq(target).before(parties.eq(target2));
}

$('.liberal').hover(function() {
    $('.vid').attr("src","videos/liberal.mp4")
});

$('.conservative').hover(function() {
    $('.vid').attr("src","videos/conservative.mp4")
});

$('.ndp').hover(function() {
    $('.vid').attr("src","videos/ndp.mp4")
});

$('.green-party').hover(function() {
    $('.vid').attr("src","videos/greenparty.mp4")
});