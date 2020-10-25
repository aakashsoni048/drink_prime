<?php 
/* Template Name: Book-slots  */
?>

<?php get_header();?>

<?php


// Given Link -- "http://ec2-15-207-89-27.ap-south-1.compute.amazonaws.com:8080/bookslot/list?jobId=13173&mobileNumber=8310039860"

// Dummy Link -- "https://reqres.in/api/users?page=2"

?>
<!-- <link href="https://subscribe.drinkprime.in/wp-content/themes/simpalfyi/custom_css/styles.css" rel="stylesheet" /> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
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
    width: 90%;
    margin-left: 65px;
  }
}
@media only screen and (max-width: 1023px) {
  form {
    width: 90%;
    margin-left: 40px;
  }
}
@media only screen and (max-width: 767px) {
  form {
    width: 90%;
    margin-left: 40px;
  }
  #radio_data-error {
    top: 225px;
  }
}
@media only screen and (max-width: 540px) {
  form {
    width: 90%;
    margin-left: 15px;
  }
}
#portfolioModal6{
    display: none;
}

/*modal css start*/
#forgatPassModalId {
    opacity: inherit;
    padding: 10px;
  }
.modal-dialog {
    max-width: 500px;
    margin: 14.75rem auto;
}
.forgatpass-modal-content {
    padding: 40px;
}

.modal-content {
    position: relative;
    /*display: flex;*/
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 0 solid rgba(0, 0, 0, 0.2);
    border-radius: 0px 60px 0px 60px;
    outline: 0;
}
.modal-dialog.full-screen {
    position:fixed;
    //width:auto;  // uncomment to make the width based on the left/right attributes.
    margin:auto;                        
    left:0px;
    right:0px;
    top:0px;
    bottom:0px;
}

.modal-dialog.full-screen .modal-content {
    position: absolute;
    left: -8px;
    right: 0px;
    top: 150px;
    bottom: 10px;
    height: 650px;
}
.modal-dialog.full-screen .modal-content .modal-body {
    overflow-y: auto;
    position: absolute;
    top: 70px;
    bottom: -400px;
    left: 0px;
    right: 0;
    margin-top: 70px;
    margin-bottom: 20px;
}
.portfolio-modal .close {
    position: absolute;
    z-index: 1;
    right: 1.5rem;
    top: 1rem;
    font-size: 3rem;
    line-height: 3rem;
    color: #1abc9c;
    opacity: 1;
}
.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 0.5;
}
button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
}
/*modal css end*/
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php 
    $jobId = $_GET['jobId'];
    $mobileNumber = $_GET['mobileNumber'];
?>

<!-- Thankyou Modal -->
<div class="portfolio-modal modal fade" id="forgatPassModalId" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-right: 15px;padding-left: 10px;">
  <div class="modal-dialog" style="max-width: 940px;">

    <div class="modal-content">
        <button class="close" type="" data-dismiss="modal" aria-label="Close" style="outline: none;">
          <img src="https://subscribe.drinkprime.in/wp-content/uploads/2020/08/Vector.png" alt="" width="30px" height="30px" style="margin-right: 20px;">
        </button>
        <div class="">
            <div class="container">
              <div class="row">
                <div class="col-md-6 text-center" style="padding: 15px;">
                  <img style="width: 140px;margin-bottom:16px;" src="https://subscribe.drinkprime.in/wp-content/uploads/2020/08/Group-2.png">
                  <h2 id="portfolioModal6Label" style="font-weight: 300; font-size:36px; color: #000B38;">THANK YOU !</h2>
                  
                  <!-- Portfolio Modal - Text-->
                  <p class="mb-5" style="font-size:14px;font-weight:200px;color:#a7a7a7">Thank you for choosing an appointment slot.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

  </div>
</div>
<!-- Thankyou Modal -->


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

<!--     <p style="text-align: end;"><a id="forgatpassmodal" class="forgat-txt" href="#">Forgot password?</a></p>
 --></form> 

<script type="text/javascript">
    $("#forgatpassmodal").on( "click", function() {
      $('#forgatPassModalId').modal('show');  
    });
</script>
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

        date += '<div class="radio-data-div"><input type="radio" name="radio_data" id="radio-data_'+i+'" value="'+radio_value+'"><label id="radio-data_'+i+'" style="display:inline-block;margin-left: 10px;">' +obj[i].date+ ',' +obj[i].day+ ','+obj[i].startTime+' to '+obj[i].endTime+','+obj[i].virtualGroup+'</label></div>'
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
                $('#forgatPassModalId').modal('show');  
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

