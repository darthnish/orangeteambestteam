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
     var topics = ["Health","Education","Economy","Environment","Jobs","Foreign Policy","Families","Social Issues","Housing"];
     var checkLocalStorage;
     for(var i=0;i<topics.length;i+=1){
         checkLocalStorage = localStorage.getItem(topics[i]);
         if(checkLocalStorage!== "undefined") {
            $('input[name="' + topics[i] + '"][value="' + checkLocalStorage + '"]').attr('checked', true);
             console.log("working2");
        }
        console.log("working");
     }
    
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
    
    
    $('.results').click(function() {
        
        var partyAlignment = document.getElementById('party-alignment');
        var resultsDiv = document.createElement("div");

        var liberalImg = document.createElement("img");
        var ndpImg = document.createElement("img");
        var conservativeImg = document.createElement("img");
        var greenImg = document.createElement("img");

        var resultsP = document.createElement("p");
        partyAlignment.innerHTML = "";
        
        var selectedParty;
        var totalAnswered = 0;
        var ndp = 0;
        var liberal =0;
        var conservative=0;
        var green=0;
        var unselected =0;
        for(var i=0;i<topics.length;i+=1){
            selectedParty = $('input[name="' + topics[i] + '"]:checked').val();
            
            localStorage.setItem(topics[i],selectedParty);
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
            $('#liberal-results').text((Math.floor((liberal/totalAnswered)*100))+"%");
            
            $('#ndp-results').css({"width":(ndp/totalAnswered)*100+"%"});
            $('#ndp-results').text((Math.floor((ndp/totalAnswered)*100))+"%");
            
            $('#conservative-results').css({"width":(conservative/totalAnswered)*100+"%"});
            $('#conservative-results').text((Math.floor((conservative/totalAnswered)*100))+"%");
            
            $('#green-results').css({"width":(green/totalAnswered)*100+"%"});
            $('#green-results').text((Math.floor((green/totalAnswered)*100))+"%");
            
            
            resultsP.innerText = "Based on your votes, you agreed the most with the ";
            
            liberalImg.src="img/logo/liberal_white.svg";
            ndpImg.src="img/logo/ndp_white.svg";
            greenImg.src="img/logo/green_white.svg";
            conservativeImg.src="img/logo/conservative_white.png";
            
            liberalImg.setAttribute("class","results-img");
            ndpImg.setAttribute("class","results-img");
            greenImg.setAttribute("class","results-img");
            conservativeImg.setAttribute("class","results-img");
           
            if(liberal>=ndp && liberal>=green && liberal>=conservative){
              resultsP.innerHTML += "<span class='color--liberal'> Liberal Party</span>"; 
              resultsDiv.appendChild(liberalImg)
            }
            
            if(ndp>=liberal && ndp>=green && ndp>=conservative){
              resultsP.innerHTML +="<span class='color--ndp'> NDP Party</span>";  
              resultsDiv.appendChild(ndpImg);
            }
            
            if(green>=ndp && green>=liberal && green>=conservative){
              resultsP.innerHTML +="<span class='color--green'> Green Party</span>";  
              resultsDiv.appendChild(greenImg);
            }
            
            if(conservative>=ndp && conservative>=liberal && conservative>=green){
              resultsP.innerHTML  +="<span class='color--conservative'> Conservative Party</span>";  
              resultsDiv.appendChild(conservativeImg);
            }
             
            resultsP.innerHTML+=".";  
            
            resultsDiv.appendChild(resultsP);
   /*         resultsDiv.appendChild(liberalImg);
            resultsDiv.appendChild(ndpImg);
            resultsDiv.appendChild(conservativeImg);
            resultsDiv.appendChild(greenImg);*/
            partyAlignment.appendChild(resultsDiv);
            
            
        }
        
 /*       console.log("ndp " + ndp);
        console.log("liberal " + liberal);
        console.log("con" + conservative);
        console.log("green" + green);
        console.log(unselected);*/
    });
    
   
});

//Enables Modal
$('#results-modal').on('shown.bs.modal', function () {

});