$(document).ready(function(){
    $("#contact_form").validate({
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
                    setTimeout(function() {
                    window.location.href = "https://subscribe.drinkprime.in/";
                    }, 2000);
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