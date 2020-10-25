<?php 
/* Template Name: Book-slots  */
?>

<?php get_header();?>

<link href="https://subscribe.drinkprime.in/wp-content/themes/simpalfyi/custom_css/css_for_bookslots.css" rel="stylesheet" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
     <h2 class="success-txt">Appointment Successfully Submitted.</h2>      
    </div>

    <div id="unsucess_form_msg">
     <h2 class="unsucess-txt">Something went wrong. Please try again.</h2>      
    </div>
    <div id="uname_response" ></div>

    <input type="hidden" name="jobId" value="<?php echo $jobId;?>">
    <input type="hidden" name="mobileNumber" value="<?php echo $mobileNumber;?>">
    <h4 class="text-uppercase mb-4 top-head"><?php echo get_field('heading'); ?>
    </h4>
    <br>
    <p><?php echo get_field('paragraph'); ?></p>
    <label><?php echo get_field('sub_heading'); ?></label>
    <div id="radio-data">
        
    </div>

    <div style="text-align: right;margin-top: 30px;margin-bottom: -45px;">
        <input name="submit" id="submit" type="submit" value="Submit">
    </div>
    
    <a href="#" id="loadMore">Load More</a>
</form> 

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

        var radio_value = obj[i].date+'_'+obj[i].day+'_'+obj[i].startTime+'_'+obj[i].endTime+'_'+obj[i].day+'_'+obj[i].virtualGroup;

        date += '<div class="radio-data-div" style="margin: 10px 0px 10px 0px;"><input type="radio" name="radio_data" id="radio-data_'+i+'" value="'+radio_value+'"><label id="radio-data_'+i+'">' +obj[i].day+ ', ' +obj[i].date+ ', '+obj[i].startTime+' to '+obj[i].endTime+'</label></div>'
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

