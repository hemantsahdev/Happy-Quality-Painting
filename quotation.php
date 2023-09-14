<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>

</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Happy Quality Painting</title>
  <link rel="icon" href="assets/images/hello.ico">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sacramento&family=Work+Sans:wght@200&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>
<div class="background_div " >


    <!-- header start -->
<?php require 'includes/header.php';



$type_of_propertyErr=$type_of_areaErr=$type_of_surfaceErr=$timeErr=$nameErr=$emailErr=$phonenumberErr="";

$quotation_insert=false;


if(isset($_POST['quotation_submit'])){

  if (empty($_POST['type-of-property'])) {
    $type_of_propertyErr="Mark any one*";
  }
  else {
    $type_of_property=$_POST['type-of-property'];
  }

  if (empty($_POST['type-of-area'])) {
    $type_of_areaErr="Mark atleast any one*";
  }
  else {
    $type_of_area=$_POST['type-of-area'];
  }

  if (empty($_POST['type-of-surface'])) {
    $type_of_surfaceErr="Mark any one*";
  }
  else {
    $type_of_surface=$_POST['type-of-surface'];
  }

  if (empty($_POST['time'])) {
    $timeErr="Mark any one*";
  }
  else {
    $time=$_POST['time'];
  }

  if (empty($_POST['name'])) {
    $nameErr="Name is required*";
  }
  else {
    $name=$_POST['name'];

  if (!preg_match("/^[A-Za-z. ]*$/",$name)) {
    $nameErr="Only letters and white spaces are allowed";
  }
}
  if (empty($_POST['email'])) {
    $emailErr="Email is required*";
  }
  else {
    $email=$_POST['email'];
  }

  if (empty($_POST['phonenumber'])) {
    $phonenumberErr="Phone number is required*";
  }
  else {
    $phonenumber=$_POST['phonenumber'];
  }


}



    ?>

    <!-- header end -->
    <div class="banner_quotation">
<h1>Get Free Quotation!</h1>
<p>You've come to the right place if you're looking for a free quotation for painting services. You can be sure you're in good hands when you hire us for your project because we offer top-notch painting services to both residential and commercial clients.</p>
    </div>

  <?php
  if (isset($_POST['quotation_submit'])) {


    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phonenumber']) || empty($_POST['type-of-property'])  || empty($_POST['type-of-area']) || empty($_POST['type-of-surface']) || $_POST['time']  ) {
      echo " <p>All fields are required to be filled*;</p>";
    }
}

     ?>

<form class="quotation_form" action="quotation.php" method="post" autocomplete="off">

<div class="quotation_form1  " >
<div class="form_title">


  <h3 class="modal-title" >
    What type of property is this for?
  </h3>
  <div class="error_message">


  <span class="first_error"><?php echo $type_of_propertyErr; ?></span>
      </div>
</div>

      <input type="radio" name="type-of-property" value="Residential" id="modal-form1" >
      <label   for="1radio1">Residential</label><br>
      <input type="radio" name="type-of-property" value="Custom Painting" id="modal-form1" >
      <label  for="1radio2">Custom Painting <span class="badge bg-danger modal-badge1">New</span> </label><br>
      <input type="radio" name="type-of-property" value="Other" id="1radio3" >
      <label  for="1radio3">Other</label>


    </div>



    <div class="quotation_form2  " >

      <h3 class="modal-title" >
       Which room(s) need decorating?      <!--needs multiple select option -->
      </h3>

      <div class="error_message">
      <span class="first_error"><?php echo $type_of_areaErr; ?></span>
          </div>

      <span style="color:red; text-align:end; display: block;"> <?php echo $typeofareaErr; ?></span>

      <input type="checkbox" name="type-of-area" value="Whole house" id="modal-form2">
      <label for="modal-form2">Whole house</label><br>
      <input type="checkbox" name="type-of-area" value="Bathroom" id="modal-form2">
      <label for="modal-form2">Bathroom</label><br>
      <input type="checkbox" name="type-of-area" value="Bedroom" id="modal-form2">
      <label for="modal-form2">Bedroom</label><br>
      <input type="checkbox" name="type-of-area" value="Hallway" id="modal-form2">
      <label for="modal-form2">Hallway</label><br>
      <input type="checkbox" name="type-of-area" value="Kitchen" id="modal-form2">
      <label for="modal-form2">Kitchen</label><br>
      <input type="checkbox" name="type-of-area" value="Living/dining room" id="modal-form2">
      <label for="modal-form2">Living/dining room</label><br>
      <input type="checkbox" name="type-of-area" value="Office/Study" id="modal-form2">
      <label for="modal-form2">Office/Study</label><br>
      <input type="checkbox" name="type-of-area" value="Stairs/Landing" id="modal-form2">
      <label for="modal-form2">Stairs/Landing</label><br>
      <input type="checkbox" name="type-of-area" value="Outside of property" id="modal-form2">
      <label for="modal-form2">Outside of property</label><br>
      <input type="checkbox" name="type-of-area" value="Other" id="modal-form2">
      <label for="modal-form2">Other</label><br>
    </div>
    <div class="quotation_form3 " >


      <h3 class="modal-title" >
        What is the current condition of the surfaces to be painted?
      </h3>

      <div class="error_message">
      <span class="first_error"><?php echo $type_of_surfaceErr; ?></span>
          </div>

      <input type="radio" name="type-of-surface" value="Excellent" id="modal-form3">
      <label for="modal-form3" style="display:inline">Excellent <span class="surface-span">(clean and smooth)</span></label> <br>
      <input type="radio" name="type-of-surface" value="Good" id="modal-form3">
      <label for="modal-form3">Good <span class="surface-span">(only minor scratches/dents)</span> </label><br>
      <input type="radio" name="type-of-surface" value="Poor" id="modal-form3">
      <label for="modal-form3">Poor <span class="surface-span">(major repairs needed)</span>  </label><br>
      <input type="radio" name="type-of-surface" value="Other" id="modal-form3">
      <label for="modal-form3">Other</label>

</div>


<div class="quotation_form4  " >


  <h3 class="modal-title" >
    When do you want this decorating carried out?

  </h3>



      <input type="radio" name="time" value="" id="modal-form4">
      <label for="modal-form4">As soon as possible</label><br>
      <input type="radio" name="time" value="" id="modal-form4">
      <label for="modal-form4">Within the next few days</label><br>
      <input type="radio" name="time" value="" id="modal-form4">
      <label for="modal-form4">Within the next week</label><br>
      <input type="radio" name="time" value="" id="modal-form4">
      <label for="modal-form4">Within the next month</label><br>
      <input type="radio" name="time" value="" id="modal-form4">
      <label for="modal-form4">I am flexible on timing</label><br>
      <input type="radio" name="time" value="" id="modal-form4">
      <label for="modal-form4">Other</label><br>

</div>


<div class="quotation_form5 " >
  <h3 class="modal-title" >
    Personal Information

  </h3>
<div class="personal_form">


      <ul>


        <span class="personal_error"><?php echo $nameErr; ?></span>
        <li> <input id="name" type="text" name="name" value="" placeholder="Your Full name*"> </li>
        <span class="personal_error"><?php echo $emailErr; ?></span>
        <li><input id="email" type="email" name="email" value="" placeholder=" Your Email*"></li>
        <span class="personal_error"><?php echo $phonenumberErr; ?></span>
        <li> <input id="phonenumber" type="tel" name="phonenumber" value="" placeholder="Your Phone Number*"> </li>
        <li> <textarea name="message" rows="3" placeholder="Type your message here..."></textarea> </li>
      </ul>



  </div>
</div>

<div class="quotation_submit">
  <button type="submit" name="quotation_submit">SUBMIT</button>

</div>


</form>
</div>


    <div class="footer">



      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 footer-intro">
          <img src="assets/images/newlogo.png" alt="Logo-img" width="155" height="45">
          <p>Every job will be painted and coated to the highest standards, no matter how big or small.
            The same level of care, attention to detail, and timely completion are provided to every one
            of our projects, no matter how big or small they may
            be. </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="quick_link">


            <h4>Quick Links</h4>
            <ul>
              <li> <a href="index.html">Home</a>
              </li>
              <li> <a href="about.html">About Us</a>
              </li>
              <li> <a href="services.html">Services</a>
              </li>
              <li> <a href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="quick_link" >
            <h4>Contact Us</h4>

            <ul>

              <li>
                <a href="tel:2368667011"> <span class="fa fa-phone-square"></span> +(236) 866-7011</a>
              </li>
              <li>
                <a href="mailto:happyqualitypainting@gmail.com"> <span class="fa fa-envelope"></span> happyqualitypainting@gmail.com</a>
              </li>
              <li class="pt-3">
                <a href="https://www.instagram.com/_h_q_p_/" class="social_link"><span class="fa fa-instagram"></span></a>
                <a href="https://twitter.com/_h_q_p_" class="social_link"><span class="fa fa-twitter"></span></a>
                <a href="https://www.linkedin.com/in/harkirat-singh-b13202253/" class="social_link"><span class="fa fa-linkedin"></span></a>
              </li>
            </ul>

          </div>
        </div>
      </div>




    </div>
    <div class="copy_right">
      <div class="row">

        <div class="col-lg-6 col-sm-12">
          <p>
            © 2022 Rights are Reserved <a href="index.html" class="copy_right_link">Happy Quality Painting.</a>
          </p>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="our_privacy">

            <a href="#">Privacy Policy</a>
          </div>
        </div>

      </div>
    </div>



  </body>
</html>
