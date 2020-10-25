<?php 
/* Template Name: API RESPONSE */
?>

<?php get_header();?>

<?php

// Given Link -- "http://ec2-15-207-89-27.ap-south-1.compute.amazonaws.com:8080/bookslot/list?jobId=13173&mobileNumber=8310039860"

// Dummy Link -- "https://reqres.in/api/users?page=2"

?>

<style type="text/css">
  form{
        padding: 30px 60px 20px 60px;
        background-color: white;
        box-shadow: 0px 0px 70px #aaaaaa;
        margin-top: 50px;
        width: 50%;
        margin-left: 400px;
        border-radius: 0px 50px 0px 50px;
    }
  label {
        display: block;
        margin-top: 15px;
        margin-bottom: 5px;
        font-weight: 700;
        font-size: 14px;
 }
 input[type=text], select, textarea {
        width: 100%;
        padding: 15px 0px 15px 10px;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 10px;
        margin-bottom: 15px;
        resize: vertical;
        outline: none;
}
input[type=submit] {
        background-color: #0046BF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-bottom: 30px;
}
#submit_form_msg{
    display: none;
}
#unsucess_form_msg{
    display: none;
}
@media only screen and (max-width: 1023px) {
  form {
    width: 75%;
    margin-left: 80px;
  }
}
@media only screen and (max-width: 767px) {
  form {
    width: 75%;
    margin-left: 40px;
  }
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<?php 
    $jobId = $_GET['jobId'];
    $mobileNumber = $_GET['mobileNumber'];
?>

<form id="contact_form" method="POST">

    <div id="submit_form_msg">
     <h2 style="color: #000000;font-size: 30px;font-weight: 200;text-transform: none;line-height: 1.8;position: relative;background-color: #FFF;padding-bottom: 30px;text-align: center;">Appointment Successfully Submitted.</h2>      
    </div>

    <div id="unsucess_form_msg">
     <h2 style="color: #FF0000;font-size: 30px;font-weight: 500;text-transform: none;line-height: 1.8;position: relative;background-color: #ffffff;padding-bottom: 30px;text-align: center;">Something went wrong. Please try again.</h2>      
    </div>
    <div id="uname_response" ></div>

    <input type="hidden" name="jobId" value="<?php echo $jobId;?>">
    <input type="hidden" name="mobileNumber" value="<?php echo $mobileNumber;?>">
    <h3 style="font-size: 18px;padding-bottom: 15px;text-align: center;">Appointment slots
    </h3>
    <br>
    <label >Date</label>
    <select name="date" id="drink-data-date">
        
    </select>

    <label >Day</label>
    <select name="day" id="drink-data-day">
        
    </select>

    <label >Start Time</label>
    <select name="startTime" id="drink-data-startTime">
        
    </select>

    <label>End Time</label>
    <select name="endTime" id="drink-data-endTime">
        
    </select>

    <label >Virtual Group</label>
    <select name="virtualGroup" id="drink-data-virtualGroup">
        
    </select>

    <input name="submit" id="submit" type="submit" value="Submit">
</form> 

<script>
  $(document).ready(function(){
    $("#contact_form").validate({
    rules :{
        "date" : {
            required : true
        },
        "day" : {
            required : true
        },
        "startTime" : {
            required : true
        },
        "endTime" : {
            required : true
        },
        "virtualGroup" : {
            required : true
        }
    },
    messages :{
        "date" : {
            required : 'Select date'
        },
        "day" : {
            required : 'Select day '
        },
        "startTime" : {
            required : 'Select start time'
        },
        "endTime" : {
            required : 'Select end time'
        },
        "virtualGroup" : {
            required : 'Select virtual group'
        }
    },

    submitHandler: function(form) {
          $.ajax({
            url:"https://subscribe.drinkprime.in/booking-response/",
            type:"POST",
            data: $(form).serialize(),
            success: function(response){
                $('#submit_form_msg').show();
                setTimeout(function() {
                  window.location.href = "https://subscribe.drinkprime.in/";
                }, 1000);
              // if(response == 1)
              // {
              //   $('#submit_form_msg').show();
              // }
              // else 
              // {
              //   $('#unsucess_form_msg').show();
              //   //$('#uname_response').html(response);
              //   //alert('error');
              // }
            }
          });
        }
    });
  });
</script>

<script>

    $.getJSON('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=<?php echo $jobId;?>&mobileNumber=<?php echo $mobileNumber;?> ', function(data) {
    // JSON result in `data` variable
    var obj = data.body.slots ;
    //console.log(obj);
     
    // date data
    date = ""
    for(var i = 0; i < obj.length; i++) {
        date += '<option>' +obj[i].date+ '</option>'
    }
    $("#drink-data-date").append(date);

    // day data
    day = "" 
    for(var i = 0; i < obj.length; i++) {
        day += '<option value="'+obj[i].day+'">' +obj[i].day+ '</option>'
    }
    $("#drink-data-day").append(day);

    // startTime data
    startTime = "" 
    for(var i = 0; i < obj.length; i++) {
        startTime += '<option value="'+obj[i].startTime+'">' +obj[i].startTime+ '</option>'
    }
    $("#drink-data-startTime").append(startTime);

    // endTime data
    endTime = "" 
    for(var i = 0; i < obj.length; i++) {
        endTime += '<option value="'+obj[i].endTime+'">' +obj[i].endTime+ '</option>'
    }
    $("#drink-data-endTime").append(endTime);

    // virtualGroup data
    virtualGroup = "" 
    for(var i = 0; i < obj.length; i++) {
        virtualGroup += '<option value="'+obj[i].virtualGroup+'">' +obj[i].virtualGroup+ '</option>'
    }
    $("#drink-data-virtualGroup").append(virtualGroup);
});


</script>


<?php get_footer();?>

