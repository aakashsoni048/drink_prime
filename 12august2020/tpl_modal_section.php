<?php 
/* Template Name: Modal Section */
?>

<?php get_header(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title></title>


<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<!-- Core theme CSS (includes Bootstrap)-->
<link href="https://subscribe.drinkprime.in/wp-content/themes/simpalfyi/custom_css/styles.css" rel="stylesheet" />

</head>
<body id="page-top">
<!-- Navigation-->

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">

<!-- custom section for drink prime -->
<div class="container">
   <div class="row big-bg">
       <div class="col-md-6">
           <img style="width: 80%;" src="https://subscribe.drinkprime.in/wp-content/uploads/2020/02/smart-feature.png" alt="">
       </div>
       <div  class="col-md-6">
          <div class="text-bg" style="background-image: url(https://subscribe.drinkprime.in/wp-content/uploads/2020/02/bg-heading.png);">
           <h4 style="font-size: 2.0rem;font-weight: bold;line-height: 1.3em;color: #000B38;" class="text-uppercase mb-4">Worried about Safe Drinking Water?</h4>
          </div>
            <p class="lead mb-0">
                Get India’s Smartest RO Water Purifier For only @350* pm
            </p>
            <br>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <a class="btn-white" href="#">Start your trial</a>
              </div>
              <br><br>
              <div class="col-md-6 col-sm-12">
                <a data-toggle="modal" data-target="#portfolioModal1" class="btn-blue" href="#">Know More</a>
              </div>
            </div>
            
            <br>
            <p class="lead mb-0">* Risk free 7 days Trial</p>
       </div>
   </div>
   <div class="big-bg"></div>
<!-- Portfolio Grid Items-->

</div>
</section>
<!-- Footer-->

<!-- Copyright Section-->

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-content">
<button class="close" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
<img src="https://subscribe.drinkprime.in/wp-content/uploads/2020/08/Vector.png" alt="" width="30px" height="30px" style="margin-right: 20px;">
</button>
<div class="modal-body ">
<div class="container">
    <div class="row">
  <!-- form sbmit -->
  <!-- col-lg-5 -->
      <div class="col-md-8">
        <h3 style="font-size: 18px; padding-bottom: 15px;">Still not sure? Fill the form below,
        <br>We will call and answer your concerns</h3>
      </div>
      <div class="col-md-6">
        <!-- <?php //echo do_shortcode("[formidable id=1]"); ?> -->

        <form  id="contact_form" action="" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter your name" required="required">

          <label for="mobile">Mobile No</label>
          <input type="text" name="mobile" placeholder="Enter your 10-digit Number" required="required">

          <label for="email">Email Id</label>
          <input type="text" name="email" placeholder="Enter your Email Id" required="required">

          <label for="city">City</label>
          <select name="city">
            <option value="australia" style="font-size: 14px;">Banglore</option>
            <option value="canada" style="font-size: 14px;">Indore</option>
            <option value="usa" style="font-size: 14px;">Dewas</option>
          </select>

          <label for="message">Message</label>
          <textarea name="message" placeholder="Tell us your concern" style="height: 80px;" required="required"></textarea>

          <!-- <input data-dismiss="modal" data-toggle="modal" data-target="#portfolioModal6" type="submit" value="Submit"> -->
          <input type="submit" value="Submit">
        </form>
      </div>
      <div class="col-md-6">
        <img class="img-hidden" style="width: 100%;margin: 120px 0px 0px 25px;" src="https://subscribe.drinkprime.in/wp-content/uploads/2020/08/Group.png">
      </div>
      <!-- form sbmit -->
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- Portfolio Modal 2-->

<!-- Portfolio Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-content">
<button class="close" type="" data-dismiss="modal" aria-label="Close" style="outline: none;">
  <img src="https://subscribe.drinkprime.in/wp-content/uploads/2020/08/Vector.png" alt="" width="30px" height="30px" style="margin-right: 20px;">
</button>
<div class="">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <img style="width: 140px;margin-bottom:16px;" src="https://subscribe.drinkprime.in/wp-content/uploads/2020/08/Group-2.png">
      <h2 id="portfolioModal6Label" style="font-weight: 300; font-size:36px; color: #000B38;">THANK YOU JOHN !</h2>
      
      <!-- Portfolio Modal - Text-->
      <p class="mb-5"style="font-size:14px;font-weight:200px;color:#a7a7a7">Thanks you for filling this form and letting us know <br> your concern we will get back to you soon within <br> 2-3 days on the given email id.</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- valid js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<!-- valid js -->


<script>
$(document).ready(function () {
  $("#contact_form")
    .bootstrapValidator({
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
        valid: "glyphicon glyphicon-ok",
        invalid: "glyphicon glyphicon-remove",
        validating: "glyphicon glyphicon-refresh"
      },
      fields: {
        name: {
          validators: {
            stringLength: {
              min: 2
            },
            notEmpty: {
              message: "Please enter your name"
            }
          }
        },
        email: {
          validators: {
            notEmpty: {
              message: "Please enter your email address"
            },
            emailAddress: {
              message: "Please enter a valid email address"
            }
          }
        },
        mobile: {
          validators: {
            notEmpty: {
              message: "Please enter your phone number"
            },
            mobile: {
              country: "US",
              message: "Please enter a vaild phone number with area code"
            }
          }
        },
        city: {
          validators: {
            stringLength: {
              min: 4
            },
            notEmpty: {
              message: "Please enter your city"
            }
          }
        },
        message: {
          validators: {
            stringLength: {
              min: 10,
              max: 200,
              message:
                "Please enter at least 10 characters and no more than 200"
            },
            notEmpty: {
              message: "Please enter a description of your project"
            }
          }
        }
      }
    })
  });

</script>

</body>
</html>



