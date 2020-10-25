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

<style type="text/css">
.page-section {
    padding: 40px 140px 40px 140px;
} 
/*form css*/
input[type=text], select, textarea {
  width: 100%;
  padding: 4px 0px 4px 10px;
  border: 1px solid #e5e5e5;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 0px;
  margin-bottom: 10px;
  resize: vertical;

  outline: none;
}

input::placeholder { 
  font-size: 14px;
  color: #a7a7a7;
}
textarea::placeholder { 
  font-size: 14px;
  color: #a7a7a7;
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
select#country{
  font-size: 14px;
  color: #a7a7a7;
}

input[type=submit]:hover {
  background-color: #0046BF;
}
.btn-blue{
    min-width: 180px;
    font-weight: 400;
    background: rgba(0, 60, 191, 0);
    background-color: #003CBF !important;
    color: #FFF !important;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #003CBF;
    border-radius: 15px 0px 15px 0px;
    font-size: 15px;
    padding: 12px 24px;
}
.btn-white{
  min-width: 180px;
    font-weight: 400;
    background: rgba(0, 60, 191, 0);
    background-color: #ffffff !important;
    color: #003CBF !important;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #003CBF;
    border-radius: 15px 0px 15px 0px;
    font-size: 15px;
    padding: 12px 24px;
    margin-left: 20px;
}
.text-bg{
  margin: 0px 0px 15px 0px;
    padding: 0px;
    background-image: url(https://subscribe.drinkprime.in/wp-content/uploads/2020/02/bg-heading.png);
    background-position: bottom left;
    background-repeat: no-repeat;
    background-size: 345px auto;
}
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 65%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 0 solid rgba(0, 0, 0, 0.2);
  border-radius: 0px 60px 0px 60px;
  outline: 0;
}
@media only screen and (max-width: 768px) {
  .page-section {
    padding: 10px !important;
}
  .img-hidden {
    display: none;
  }
}

@media (min-width: 576px){
.modal-dialog {
    margin: 3.75rem auto;
  }
}
</style>

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
            <a class="btn-white" href="#">Start your trial</a>
            <a style="border-radius: 15px 0px 15px 0px;" data-toggle="modal" data-target="#portfolioModal1" class="btn-blue" href="#">Know More</a>
            
            <br>
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
        <form action="/action_page.php">
          <label for="fname">Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Enter your name" style="margin-bottom:15px ;">

          <label for="lname">Mobile No</label>
          <input type="text" id="lname" name="lastname" placeholder="Enter your 10-digit Number" style="margin-bottom:15px ;">

          <label for="lname">Email Id</label>
          <input type="text" id="lname" name="lastname" placeholder="Enter your Email Id" style="margin-bottom:15px ;">

          <label for="country">City</label>
          <select id="country" name="country">
            <option value="australia" style="font-size: 14px;">Banglore</option>
            <option value="canada" style="font-size: 14px;">Indore</option>
            <option value="usa" style="font-size: 14px;">Dewas</option>
          </select>

          <label for="subject">Message</label>
          <textarea id="subject" name="subject" placeholder="Tell us your concern" style="height: 80px;"></textarea>

          <input data-dismiss="modal" data-toggle="modal" data-target="#portfolioModal6" type="submit" value="Submit">
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

</body>
</html>



<?php get_footer(); ?>