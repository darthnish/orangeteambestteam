var xhttp = new XMLHttpRequest();
xhttp.open("GET", "partials/mp.xml", true);
xhttp.onreadystatechange = function() {
	if(xhttp.readyState === 4 && xhttp.status === 200) {
		console.log(xhttp.responseXML);
		displayInfo(xhttp);
	}
}
xhttp.send();

//////// Display each Province's contents ////////

function displayInfo(xml) {
	xmlDoc = xml.responseXML;
	mp = xmlDoc.getElementsByTagName("MemberOfParliament");
	var txt = "";

	var info = "";

	for(var i=0; i< mp.length; i+=1) {

//////// Change Img and Color depends on party

		// Party Logo Img
		party = mp[i].getElementsByTagName("CaucusShortName")[0].childNodes[0].nodeValue;
		var partyImg = "";

		if(party === "Liberal") {
			partyImg += "img/logo/liberal_2.svg";
		}
		else if(party === "NDP") {
			partyImg += "img/logo/ndp_2.svg";
		}
		else if(party === "Conservative") {
			partyImg += "img/logo/conservative_2.svg";
		}
		else {
			partyImg += "img/logo/green_2.svg";
		}

		// Border Line
		var borderCol = "";

		if(party === "Liberal") {
			borderCol += "bg-red";
		}
		else if(party === "NDP") {
			borderCol += "bg-orange";
		}
		else if(party === "Conservative") {
			borderCol += "bg-blue";
		}
		else {
			borderCol += "bg-green";
		}

		// Party Name
		var partyCol = "";

		if(party === "Liberal") {
			partyCol += "red";
		}
		else if(party === "NDP") {
			partyCol += "orange";
		}
		else if(party === "Conservative") {
			partyCol += "blue";
		}
		else {
			partyCol += "green";
		}


//////// Show contents in the column
		selectParty = document.getElementById("parties").value;

		info += "<div class='mp-con col-xs-6 col-md-3' data-party='"+ party +"'>" +
			"<div class='mp-info d-flex justify-content-between'><h4 class='name'>" +
			mp[i].getElementsByTagName("PersonOfficialFirstName")[0].childNodes[0].nodeValue + " " +
			mp[i].getElementsByTagName("PersonOfficialLastName")[0].childNodes[0].nodeValue +
			"</h4>" +
			"<img src=" + partyImg + " class='party-logo'></div><div id=" + borderCol + " class='line'></div>" +
			"<p id=" + partyCol + " class='party-name'>" +
			mp[i].getElementsByTagName("CaucusShortName")[0].childNodes[0].nodeValue +
			"</p>" +
			"<p class='constituency'>" +
			mp[i].getElementsByTagName("ConstituencyName")[0].childNodes[0].nodeValue +
			"</p>" +
			"</div>";
	}
	$( "#display-info" ).append(info);
}


// When change select box
$('#parties').change(function() {

	selectParty = document.getElementById("parties").value;

	$('.mp-con').each(function() {

		$(this).css('display', 'block');

		// Grab party's data attribute
		var partyDataAttr = $(this).data("party");

		// Check to see if that data attribute is the same as selectbox value
		// If it's not, others not display
		if(selectParty === "all parties") {
			$(this).css('display', 'block');
		}
		else if(selectParty !== partyDataAttr){
			$(this).css('display', 'none');
		}
	});
});
