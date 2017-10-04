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
    
    //toggle parties
    $('#green').click(function() {
        var cat = $(this).data("party");
        $('.policy--topic[data-party="'+ cat + '"]').toggle();
    });
    
    $('#ndp').click(function() {    
        var cat = $(this).data("party");
        $('.policy--topic[data-party="'+ cat + '"]').toggle();
       
    });
    $('#liberal').click(function() {    
        var cat = $(this).data("party");
        $('.policy--topic[data-party="'+ cat + '"]').toggle();
       
    });
    $('#conservative').click(function() {    
        var cat = $(this).data("party");
        $('.policy--topic[data-party="'+ cat + '"]').toggle();
       
    });
    
    //calculate scores
    
    var topics = ["Health","Education","Economy","Environment","Jobs","Foreign Policy","Families","Social Issues","Housing"];
    $('.results').click(function() {
        var selectedParty;
        var totalAnswered = 0;
        var ndp = 0;
        var liberal =0;
        var conservative=0;
        var green=0;
        var unselected =0;
        for(var i=0;i<topics.length;i+=1){
            selectedParty = $('input[name="' + topics[i] + '"]:checked').val();
            if(selectedParty === "ndp"){
                ndp+=1;
            }
            
            else if(selectedParty === "liberal"){
                liberal+=1;
            }
            
            else if(selectedParty === "conservative"){
                conservative+=1;
            }
            
            else if(selectedParty === "green"){
                green+=1;
            }
            
            else{
                unselected+=1;
            }
        }
        
        totalAnswered = topics.length - unselected;
        
        if (unselected === topics.length){
            $('#liberal-results').hide();
            $('#ndp-results').hide();
            $('#conservative-results').hide();
            $('#green-results').hide();
            $('.results-title').html("Please select a party")
        }
        
        else {
            $('#liberal-results').show();
            $('#ndp-results').show();
            $('#conservative-results').show();
            $('#green-results').show();
            $('.results-title').html("Results");
            
            $('#liberal-results').css({"width":(liberal/totalAnswered)*100+"%"});
            $('#ndp-results').css({"width":(ndp/totalAnswered)*100+"%"});
            $('#conservative-results').css({"width":(conservative/totalAnswered)*100+"%"});
            $('#green-results').css({"width":(green/totalAnswered)*100+"%"});
            
            
        }
        
   /*     console.log(ndp);
        console.log(liberal);
        console.log(conservative);
        console.log(green);
        console.log(unselected);*/
    });
    
   
});

//Enables Modal
$('#results-modal').on('shown.bs.modal', function () {

});