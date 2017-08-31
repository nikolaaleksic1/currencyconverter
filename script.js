function exchangeCurrency() {
  var amount = $(".amount").val();
  var selectEurUSD = $('select.currency-list').children(':selected').text();
  var selectRSD = $('select.rsd-list').children(':selected').text();
  var eur = $(".eur").val();
  var usd = $(".usd").val();
  var parseNum = parseFloat($(".eur").val());
  var resultNum = parseNum.toFixed(2);
  var numInTable = document.getElementById("results").innerHTML;

  if (selectEurUSD == "RSD"){
     $('.rsd-list').children('option[value="val2"]').hide();
  } else {
    $('.rsd-list').children('option[value="val2"]').show();
  }


  if(selectRSD == "RSD"){
     $('.currency-list').children('option[value="1"]').hide();
  } else {
    $('.currency-list').children('option[value="1"]').show();
  }


  if (amount == undefined) {
    $("#results").html("0");
  } else {

   //check to see if "EUR || USD is selected"
   //then display results and round them to 2 decimals
  if(selectEurUSD == "EUR" && selectRSD == "RSD"){
       $("#results").html((amount * (eur )).toFixed(2));
        if(isNaN(numInTable)){
         $("#results").html(resultNum);
       }
  } else if(selectEurUSD == "USD" && selectRSD == "RSD"){
      $("#results").html((amount * (usd )).toFixed(2));
  }else if(selectEurUSD === "EUR" && selectRSD == "USD"){
      $("#results").html((amount * (eur/usd )).toFixed(2));
  } else if(selectEurUSD == "USD" && selectRSD == "EUR"){
     $("#results").html((amount * (usd/eur )).toFixed(2));
  } else if(selectEurUSD == "RSD" && selectRSD == "EUR"){
     $("#results").html((amount * (1/eur )).toFixed(2));
  }  else if(selectEurUSD == "RSD" && selectRSD == "USD"){
     $("#results").html((amount * (1/usd )).toFixed(2));
  } else if(selectEurUSD == "EUR" && selectRSD == "EUR"){
     $("#results").html((amount * (1)).toFixed(2));
  } else if(selectEurUSD == "USD" && selectRSD == "USD"){
     $("#results").html((amount * (1)).toFixed(2));
  }

}
}



function clear_all_values(){
  var inputs, eur;
  eur = parseFloat($(".eur").val());
  var r = eur.toFixed(2);
  inputs = document.getElementsByTagName("input");
  for(i=0; i<inputs.length; i++){
    inputs[i].value = "1";
  }

  document.getElementById("results").innerHTML = r;
  document.getElementById("valid").innerHTML = "";
}

// reset the selected option
$('#reset').click(function(){
      $('.currency-list').prop('selectedIndex',0);
      $('.rsd-list').prop('selectedIndex',0);
  })


function validate(){
  var amount = $(".amount").val();
  var proba = parseFloat($(".eur").val());
  var r = proba.toFixed(2);
  if($.isNumeric(amount)){
    console.log(amount);
    document.getElementById("valid").innerHTML = "";
  } else {
    console.log("NOOOOO");
    document.getElementById("valid").innerHTML = "Please enter a valid number!";
    document.getElementById("results").innerHTML = r;
  }
}

// $('.svgIcon').on('click', function () {
//       var toValue = $('.currency-list').find(':selected').val();
//       var toText =  $('.currency-list').find(':selected').text();
//       var fromValue = $('.rsd-list').find(':selected').val();
//       var fromText =  $('.rsd-list').find(':selected').text();
//
//       var amount = $(".amount").val();
//       var selectEurUSD = $('select.currency-list').children(':selected').text();
//       var selectRSD = $('select.rsd-list').children(':selected').text();
//       var eur = $(".eur").val();
//       var usd = $(".usd").val();
//
//      $('.rsd-list').find(':selected').val(toValue);
//      $('.rsd-list').find(':selected').text(toText);
//
//      $('.currency-list').find(':selected').val(fromValue);
//      $('.currency-list').find(':selected').text(fromText);
//
//     if(selectEurUSD == "EUR" && selectRSD == "RSD"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     } else if(selectEurUSD == "RSD" && selectRSD == "EUR"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }else if(selectEurUSD == "USD" && selectRSD == "RSD"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }else if(selectEurUSD == "RSD" && selectRSD == "USD"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }else if(selectEurUSD == "USD" && selectRSD == "USD"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }else if(selectEurUSD == "EUR" && selectRSD == "EUR"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }else if(selectEurUSD == "USD" && selectRSD == "EUR"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }else if(selectEurUSD == "EUR" && selectRSD == "USD"){
//       $('.rsd-list').find(':selected').text(toText);
//       $('.currency-list').find(':selected').text(fromText);
//     }
//       exchangeCurrency();
//   })

