'use strict';


(function($){
  
    // Load json file
    //$.getJSON("http://zeroemissioncalculator.com/components/com_co2/assets/calculator.json", function(json) {
    $.getJSON("http://kossa.local/zeroemissioncalculator/components/com_co2/assets/calculator.json", function(json) {
      window.calcOBJ = json;
    });

    // Slider
    $(".ex1 .mb_slider").mbSlider({
      onSlide:function(o){
        $("#"+o.id+"_val").find(".val").val($(o).mbgetVal());
        var _this = $('#'+o.id);
        calculate(_this);
      },
      onSlideLoad:function(o){
        $("#"+o.id+"_val").find(".val").val($(o).mbgetVal());
      }
    });

    // set the slider
    $('.setVal input').on('input', function(event) {
      var _this = $(this),
          id = _this.parent().attr("id");
        id = id.replace("_val","");
      $('#'+id).mbsetVal(_this.val());
    });

    // on Change Value 
    $('.setVal input').on('change keyup input', function(event) {
      event.preventDefault();
      var _this = $(this);
      calculate(_this);

      // Set All Total
    });

    // Click on reset
    $("a.reset").click(
      function(){
        var
          _this = $(this),
          thisTab =_this.closest(".tab-pane");
        thisTab.find('input').each(function(){
          $(this).val(0);
        });

         thisTab.find('.mb_slider').each(function(){
          $(this).mbsetVal(0);
        });

         return false;

      }
    );




/*
|------------------------------------------------------------------------------------
| All functions
|------------------------------------------------------------------------------------
*/
function calculate(_this){
  var
      theLine  = _this.closest("section"), // Get the section of the element
      theVal   = theLine.find('.setVal input').val(),
      set      = theLine.find("input.val").val(),
      _name    = theLine.data("name"),
      result1  = theLine.find('.result1'),
      result2  = theLine.find('.result2'),
      result3  = theLine.find('.result3');


    try{ // Create all Constants
      var 
        _Constants = calcOBJ[_name]["Constants"],
        _Outputs   = calcOBJ[_name]["Outputs"];

      for(var _Constant in _Constants){
         window[_Constant] = _Constants[_Constant] ;
      }

      // Get the results
      for(var _Output in _Outputs){
         window[_Output] = parseInt(eval(_Outputs[_Output])) ;
      }

      //Set result
      result1.val(co2);
      result2.val(kw);
      result3.val(participation);


    }catch(e){
      $('#the-error').html("Not declared in the database");
      return;
    }
    

    // Set the Total
    setTotalInTab(_this);

}

function setTotalInTab(_this){
  var
      _totalResult1 = 0, 
      _totalResult2 = 0,
      _totalResult3 = 0,
      theTab        = _this.closest(".tab-pane"),
      _isGreen      = _this.closest('section.green').length == 1,
      greenSection  = (_isGreen) ? 'section.green ' : '',
      greenTotal    = (_isGreen) ? '.jumbotron>section.green ' : '.jumbotron>section:not(.green) ';


  theTab.find(greenSection + '.result1').each(function() {
      _totalResult1 += parseInt($(this).val());
  });
  
  theTab.find(greenSection + '.result2').each(function() {
      _totalResult2 += parseInt($(this).val());
  });
  
  theTab.find(greenSection + '.result3').each(function() {
      _totalResult3 += parseInt($(this).val());
  });
  
  // Set Values into the inputs
  theTab.find(greenTotal + '.totalResult1').val(_totalResult1);
  theTab.find(greenTotal + '.totalResult2').val(_totalResult2);
  theTab.find(greenTotal + '.totalResult3').val(_totalResult3);

  // Set the Value into the Slider 
  theTab.find(greenTotal + '.sl_total_travel').mbsetVal(_totalResult1);

  // Set the Total
  setTheTotal(_isGreen);

}

function setTheTotal(_isGreen){

  var
    _theTotalResult1 = 0,
    _theTotalResult2 = 0,
    _theTotalResult3 = 0,
    theTotalField    = $('.jumbotron.the-total'),
    greenTotal       = (_isGreen) ? 'section.green ' : 'section:not(.green) ';

  // Get Totals
  $('.jumbotron:not(.the-total) ' + greenTotal).each(function() {
      _theTotalResult1 += parseInt($(this).find('.totalResult1').val());
      _theTotalResult2 += parseInt($(this).find('.totalResult2').val());
      _theTotalResult3 += parseInt($(this).find('.totalResult3').val());
  });


  // Set Totals in Fields
  theTotalField.find(greenTotal + ' .totalResult1').val(_theTotalResult1);
  theTotalField.find(greenTotal + ' .totalResult2').val(_theTotalResult2);
  theTotalField.find(greenTotal + ' .totalResult3').val(_theTotalResult3);


  // Set Total in the slider
  theTotalField.find(greenTotal + '.sl_total_travel').mbsetVal(_theTotalResult1);

}

})(jQuery);