<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />

  <title>Contact US</title>
  <link rel="icon" href="assets/images/hello.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sacramento&family=Work+Sans:wght@200&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <?php
  // to remove Xampp warnings
  ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);


  $insert = false;
  if (isset($_POST['fname'])) {

  // set connection variable
  $server = "localhost";
  $username = "root";
  $password = "";
  // create database connection
  $con = mysqli_connect($server , $username, $password );
  // check for connection success
  if(!$con){
    die("connection failed".mysqli_connect_error());
  }

  // collect post variables


  $message= $_POST['message'];
$fnameErr=$phonenumberErr=$emailErr="";
$fname=$phoneNumber=$email="";

  if (empty($_POST['fname']))  {
     $fnameErr= "Name is required*";
  }
  else{
    $fname = $_POST['fname'];
  }

  if (empty($_POST['phonenumber']))  {
    $phonenumberErr= "Phone number is required*";

  }
  else{
    $phonenumber = $_POST['phonenumber'];
  }

  if (empty($_POST['email']) ) {
     $emailErr= "Email is required*";

  }
  else{
    $email = $_POST['email'];
  }



  $sql =" INSERT INTO `happy quality painting`.`contact form` ( `FullName`, `Email`, `PhoneNumber`, `Message`, `Date`) VALUES ( '$fname', '$email', '$phonenumber', '$message', current_timestamp());";




  // Execute the query
  if ($con->query($sql) == true ) {
    // echo "Successfully inserted";
    $insert = true;
  }
  else {
    echo " ERROR: $sql <br> $con->error ";
  }

  // closing the database connection
  $con->close();
}
   ?>

  <!-- header start -->

  <?php require 'includes/header.php';

  ?>
  <div class="first-div-contact" style="background-image:url(assets/images/contact1.jpg)">

    <div class="first-heading-contact">
      <h1 >Contact Us</h1>
    </div>

  </div>


  <div class=" container form-background">
    <div class="row">
      <div class="col-lg-6 col-md-6 contact-column1">
        <div class="contact-form-h">
          <h1>
            Contact Us:
          </h1>

        </div>


        <div class="contact-form">
          <form class="" action="contact.php" method="post" id ="contact-form" autocomplete="off">
            <ul>
              <span style="color:red; text-align:end; display: block;"> <?php echo $fnameErr; ?></span>
              <li> <input id="name" type="text" name="fname" value="" placeholder="Your Full name*"> </li>

              <span style="color:red; text-align:end; display: block;"> <?php echo $emailErr; ?></span>
              <li><input id="email" type="text" name="email" value="" placeholder=" Your Email*"></li>

              <span style="color:red; text-align:end; display: block;"> <?php echo $phonenumberErr; ?></span>
              <li> <input id="phonenumber" type="text" name="phonenumber" value="" placeholder="Your Phone Number*"> </li>

              <li> <textarea name="message" rows="5" placeholder="Type your message here..."></textarea> </li>
            </ul>

            <div class=" contact-button">
            <button type="submit" name="submitbutton" form="contact-form">Submit</button>
          <span style="color:#048e0469"> <?php
            if ($insert== true) {
              echo "submitted Successfully";
            } ?></span>
            </div>
          </form>
        </div>

<div class="icons-col">


        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 icons-col1">
            <div class="d-flex">
              <div class="contact-icon">
                <span class="fa fa-phone fa-2x"> </span>
              </div>
              <div class="contact-callus">
                <h4> Call us</h4>
                <a href="tel:2368667011"> +1(236) 866-7011</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 icons-col2">
            <div class="d-flex">
              <div class="contact-icon">
                <span class="fa fa-envelope-open"> </span>
              </div>
              <div class="contact-callus">
                <h4> Email Us</h4>
                <a href="mailto:happyqualitypainting@gmail.com">  happyqualitypainting@gmail.com</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="col-lg-6 col-md-6 contact-column2">
        <div class="container contact-form-img">
          <img src="assets/images/contact-form-img.jpg" alt="contact-form-img">

        </div>
      </div>

    </div>
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
