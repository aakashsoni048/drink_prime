<?php 
/* Template Name: Testing Book-slots  */
?>

<?php get_header();?>

<link href="https://subscribe.drinkprime.in/wp-content/themes/simpalfyi/custom_css/css_for_bookslots.css" rel="stylesheet" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://subscribe.drinkprime.in/wp-content/themes/simpalfyi/custom_css/testing.js"></script>

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


<form id="contact_form_testing" method="POST">

    <div id="submit_form_msg">
     <h2 class="success-txt">Appointment Successfully Submitted.</h2>      
    </div>

    <div id="unsucess_form_msg">
     <h2 class="unsucess-txt">Something went wrong, Please try again or please contact us.</h2>      
    </div>
    <div id="uname_response" ></div>

    <input type="hidden" name="jobId" value="<?php echo $jobId;?>">
    <input type="hidden" name="mobileNumber" value="<?php echo $mobileNumber;?>">
    <h4 class="text-uppercase mb-4 top-head">BOOK A SLOT</h4>
    <br>
    <p>This is an appointment page which helps us to give you the best service...</p>
    <label>Select your preferred slot for our partner visit:</label>
    <div id="radio-data-testing">
        
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

<?php get_footer();?>

