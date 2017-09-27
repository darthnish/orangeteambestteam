//jQuery function
$(function(){

  // when province on selectbox select
  $('#province').change(function() {
    $('.mp-num-con').show();
    if($(this).val() === 'Alberta') {
      $('#prov-name').text('Alberta').css('font-size','1.8rem');
      $('#lib-num').text('3');
      $('#ndp-num').text('1');
      $('#con-num').text('28');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'British Columbia') {
      //BC(17,14,10,1)
      $('#prov-name').text('BC').css('font-size','1.8rem');
      $('#lib-num').text('17');
      $('#ndp-num').text('14');
      $('#con-num').text('10');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Manitoba') {
      //Manitoba(7,2,5,0)
      $('#prov-name').text('Manitoba').css('font-size','1.8rem');
      $('#lib-num').text('7');
      $('#ndp-num').text('2');
      $('#con-num').text('5');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'New Brunswick') {
      //New Brunswick(10,0,0,0)
      $('#prov-name').text('New Brunswick').css('font-size','1rem');
      $('#lib-num').text('10');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Newfoundland and Labrador') {
      //Newfoundland and Labrador(7,0,0,0)
      $('#prov-name').text('Newfoundland and Labrador').css('font-size','0.9rem');
      $('#lib-num').text('7');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Nothwest territories') {
      //Nothwest territories(1,0,0,0)
      $('#prov-name').text('Nothwest territories').css('font-size','1rem');
      $('#lib-num').text('1');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Nova Scotia') {
      //Nova Scotia(11,0,0,0)
      $('#prov-name').text('Nova Scotia').css('font-size','1.8rem');
      $('#lib-num').text('11');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'nunavut') {
      //Nunavat()independent,1
      $('#prov-name').text('Nunavat').css('font-size','1.8rem');
      $('#lib-num').text('0');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Ontario') {
      //Ontario(79,8,33,0)
      $('#prov-name').text('Ontario').css('font-size','1.8rem');
      $('#lib-num').text('79');
      $('#ndp-num').text('8');
      $('#con-num').text('33');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Prince Edward Island') {
      //Prince Edward island(4,0,0,0)
      $('#prov-name').text('Prince Edward island').css('font-size','1rem');
      $('#lib-num').text('4');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Quebec') {
      //Quebec(40,16,11,0)Bloc Quebecois,10
      $('#prov-name').text('Quebec').css('font-size','1.8rem');
      $('#lib-num').text('40');
      $('#ndp-num').text('16');
      $('#con-num').text('11');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Saskatchewan') {
      //Saskatchewan(1,3,10,0)
      $('#prov-name').text('Saskatchewan').css('font-size','1.8rem');
      $('#lib-num').text('1');
      $('#ndp-num').text('3');
      $('#con-num').text('10');
      $('#green-num').text('0');
    }
    else if($(this).val()=== 'Yukon') {
      //Yukon(1,0,0,0)
      $('#prov-name').text('Yukon').css('font-size','1.8rem');
      $('#lib-num').text('1');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else {
      //when value is 'province', hide the box
      $('.mp-num-con').hide();
    }
  });

  //////////////////////////////////////////////////

  // when on map hover, show this Box
  $('.svg__porv').mouseover(function() {
    $('.mp-num-con').show();
    var prov = $(this).attr('id');
    if( prov === 'alberta') {
      //Alberta(3,1,28,0)
      $('#prov-name').text('Alberta').css('font-size','1.8rem');
      $('#lib-num').text('3');
      $('#ndp-num').text('1');
      $('#con-num').text('28');
      $('#green-num').text('0');
    }
    else if( prov === 'BC') {
      //BC(17,14,10,1)
      $('#prov-name').text('BC').css('font-size','1.8rem');
      $('#lib-num').text('17');
      $('#ndp-num').text('14');
      $('#con-num').text('10');
      $('#green-num').text('0');
    }
    else if( prov === 'manitoba') {
      //Manitoba(7,2,5,0)
      $('#prov-name').text('Manitoba').css('font-size','1.8rem');
      $('#lib-num').text('7');
      $('#ndp-num').text('2');
      $('#con-num').text('5');
      $('#green-num').text('0');
    }
    else if( prov === 'newBrunswick') {
      //New Brunswick(10,0,0,0)
      $('#prov-name').text('New Brunswick').css('font-size','1rem');
      $('#lib-num').text('10');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if( prov === 'newfoundland') {
      //Newfoundland and Labrador(7,0,0,0)
      $('#prov-name').text('Newfoundland and Labrador').css('font-size','0.9rem');
      $('#lib-num').text('7');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if( prov === 'northwest') {
      //Nothwest territories(1,0,0,0)
      $('#prov-name').text('Nothwest territories').css('font-size','1rem');
      $('#lib-num').text('1');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if( prov === 'novaScotia') {
      //Nova Scotia(11,0,0,0)
      $('#prov-name').text('Nova Scotia').css('font-size','1.8rem');
      $('#lib-num').text('11');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if( prov === 'nunavut') {
      //Nunavat()independent,1
      $('#prov-name').text('Nunavat').css('font-size','1.8rem');
      $('#lib-num').text('0');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if( prov === 'ontario') {
      //Ontario(79,8,33,0)
      $('#prov-name').text('Ontario').css('font-size','1.8rem');
      $('#lib-num').text('79');
      $('#ndp-num').text('8');
      $('#con-num').text('33');
      $('#green-num').text('0');
    }
    else if( prov === 'princeEdward') {
      //Prince Edward island(4,0,0,0)
      $('#prov-name').text('Prince Edward island').css('font-size','1rem');
      $('#lib-num').text('4');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
    else if( prov === 'quebec') {
      //Quebec(40,16,11,0)Bloc Quebecois,10
      $('#prov-name').text('Quebec').css('font-size','1.8rem');
      $('#lib-num').text('40');
      $('#ndp-num').text('16');
      $('#con-num').text('11');
      $('#green-num').text('0');
    }
    else if( prov === 'saskatchewan') {
      //Saskatchewan(1,3,10,0)
      $('#prov-name').text('Saskatchewan').css('font-size','1.8rem');
      $('#lib-num').text('1');
      $('#ndp-num').text('3');
      $('#con-num').text('10');
      $('#green-num').text('0');
    }
    else {
      //Yukon(1,0,0,0)
      $('#prov-name').text('Yukon').css('font-size','1.8rem');
      $('#lib-num').text('1');
      $('#ndp-num').text('0');
      $('#con-num').text('0');
      $('#green-num').text('0');
    }
  });

  /////////////////////////////////////////////

  // After click province, show modal box

  // Now is only show all mp on modalbox
  // How to change after click province, only show that province's mp
  // Sorry I tried but I can't figure out how to make
  $('.mpMap').click(function() {
    $('#mp-modal').modal('show');
  });

});
