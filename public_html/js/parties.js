function getPercentage(numOne,numTwo) {
    return (numOne/numTwo) * 100;
}

function numberBar() {
    var commons = $("#commons-num").text();
    var senate = $("#senate-num").text();

    var addCommon = 80;
    var addSenate = 32;

    if(commons === "0"){
        addCommon = 30;
        $("#commons-bar").css("background","transparent");
    }else if(senate === "0"){
        addSenate = 30;
        $("#senate-bar").css("background","transparent");
    }

    $("#commons-bar").css("width",getPercentage(parseInt(commons) + addCommon,338));
    $("#senate-bar").css("width",getPercentage(parseInt(senate)+ addSenate,105));
}

numberBar();
