$(document).ready(function(){
    $("#contact_form_testing").validate({
    rules :{
        "radio_data" : {
            required : true
        }
    },
    messages :{
        "radio_data" : {
            required : 'Please select one option'
        }
    },

    submitHandler: function(form) {
          $.ajax({
            url:"https://subscribe.drinkprime.in/booking-response/",
            type:"POST",
            data: $(form).serialize(),
            success: function(data){
              if(data)
              {
                 var settings = {
                  "url": "https://staging.waterwalaprime.in:8443/bookslot/book",
                  "method": "POST",
                  "timeout": 0,
                  "headers": {
                    "Content-Type": "application/json"
                  },
                  "data": data,
                };

                $.ajax(settings).done(function (response) {
                  //console.log(response);
                  if (true) {
                    $('#forgatPassModalId').modal('show');  
                    $('#submit_form_msg').show();
                    // setTimeout(function() {
                    // window.location.href = "https://subscribe.drinkprime.in/";
                    // }, 2000);
                  }
                  else{
                    $('#unsucess_form_msg').show();
                  }
                });
              }
              else
              {
                $('#unsucess_form_msg').show();
              }
            }
          });
        }
    });
  });


$( document ).ready(function() {
    $.getJSON('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=14577&mobileNumber=8880007777', function(data) {
    // JSON result in `data` variable
    var obj = data.body.slots ;
    //console.log(obj);
     
    // date data
    date = ""
    day = "" 
    startTime = ""
    endTime = ""
    virtualGroup = ""
    for(var i = 0; i < obj.length; i++) {

        var radio_value = obj[i].date+'_'+obj[i].day+'_'+obj[i].startTime+'_'+obj[i].endTime+'_'+obj[i].virtualGroup;

        date += '<div class="radio-data-div" style="margin: 10px 0px 10px 0px;"><input type="radio" name="radio_data" id="radio-data_'+i+'" value="'+radio_value+'"><label style="display: inline;" id="radio-data_'+i+'">' +obj[i].day+ ', ' +obj[i].date+ ', '+obj[i].startTime+' to '+obj[i].endTime+'</label></div>'
    }
    //console.log(date);
    $("#radio-data-testing").html(date);
});
});