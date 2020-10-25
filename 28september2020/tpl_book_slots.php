<?php 
/* Template Name: Book-slots  */
?>

<?php get_header();?>

<?php

// Given Link -- "http://ec2-15-207-89-27.ap-south-1.compute.amazonaws.com:8080/bookslot/list?jobId=13173&mobileNumber=8310039860"

// Dummy Link -- "https://reqres.in/api/users?page=2"

?>

<style type="text/css">
  form{
        padding: 30px 60px 40px 60px;
        background-color: white;
        box-shadow: 0px 0px 70px #aaaaaa;
        margin-top: 50px;
        width: 50%;
        margin-left: 290px;
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
    padding: 15px 18px;
    border-radius: 5px;
    border: 1px solid #0046BF;
    cursor: pointer;
    font-size: 16px;
    margin-bottom: 10px;
    letter-spacing: 2px;
}
input[type=submit]:hover {
    color: #0046BF;
    background-color: #fff;
    border: 1px solid #0046BF;
    text-decoration: none;
}
#submit_form_msg{
    display: none;
}
#unsucess_form_msg{
    display: none;
}
#radio_data-error {
    position: absolute;
    top: 193px;
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    padding-right: 4rem;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    width: 47%;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
}
.radio-data-div{
    display: none;
}
#loadMore {
    width: 95px;
    color: #fff;
    background-color: #0046BF;
    transition: .3s;
    text-decoration: none;
    padding: 15px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 15px;
    margin-bottom: 10px;
    letter-spacing: 2px;
}
#loadMore:hover {
  color: blue;
  background-color: #fff;
  border: 1px solid blue;
  text-decoration: none;
}
@media only screen and (max-width: 1024px) {
  form {
    width: 75%;
    margin-left: 65px;
  }
}
@media only screen and (max-width: 1023px) {
  form {
    width: 75%;
    margin-left: 40px;
  }
}
@media only screen and (max-width: 767px) {
  form {
    width: 75%;
    margin-left: 40px;
  }
  #radio_data-error {
    top: 225px;
  }
}
@media only screen and (max-width: 540px) {
  form {
    width: 60%;
    margin-left: 15px;
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
    <h3 style="font-size: 18px;padding-bottom: 15px;text-align: center;"><?php echo get_field('heading'); ?>
    </h3>
    <br>

    <label><?php echo get_field('sub_heading'); ?></label>
    <div id="radio-data">
        
    </div>

    <div style="text-align: right;margin-top: 30px;margin-bottom: -45px;">
        <input name="submit" id="submit" type="submit" value="Submit">
    </div>
    
    <a href="#" id="loadMore">Load More</a>

</form> 

<script type="text/javascript">
  $(document).ready(function(){
  $(".radio-data-div").slice(0, 3).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".radio-data-div:hidden").slice(0, 3).slideDown();
    if($(".radio-data-div:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
})
</script>

<script>

    $.getJSON('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=<?php echo $jobId;?>&mobileNumber=<?php echo $mobileNumber;?> ', function(data) {
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
        // date += '<option>' +obj[i].date+ '</option>'

        var radio_value = obj[i].date+'_'+obj[i].day+'_'+obj[i].startTime+'_'+obj[i].endTime+'_'+obj[i].day+'_'+obj[i].virtualGroup;

        date += '<div class="radio-data-div"><input type="radio" name="radio_data" id="radio-data_'+i+'" value="'+radio_value+'"><label id="radio-data_'+i+'" style="display:inline-block;">' +obj[i].date+ ',' +obj[i].day+ ','+obj[i].startTime+' to '+obj[i].endTime+','+obj[i].virtualGroup+'</label></div>'
    }
    $("#radio-data").append(date);
   
});

</script>

<script>
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

<?php get_footer();?>

