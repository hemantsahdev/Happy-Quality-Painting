<style>

.active{
  color: #FF9F29 !important;
}
</style>

<!-- navbar starts -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="color:red">

  <a class="navbar-brand ms-4" href="index.php">
    <img src="assets/images/newlogo.png" alt="Logo-img" width="160" height="70">
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler123" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarToggler123">

    <ul class="navbar-nav mx-auto fw-bolder ">




<?php

$page = basename($_SERVER['PHP_SELF']);

?>

      <li class="nav-item mx-2">
      <a class="nav-link <?php if ($page=="index.php") {echo "active";} else {echo "noactive";} ?> main-link" href="index.php">Home</a>
      </li>

      <li class="nav-item mx-2">
      <a class="nav-link <?php if ($page=="about.php") {echo "active";} else {echo "noactive";} ?> main-link" href="about.php">About</a>
      </li>

      <li class="nav-item mx-2">
    <a class="nav-link <?php if ($page=="services.php") {echo "active";} else {echo "noactive";} ?> main-link" href="services.php">Services</a>
      </li>



      <li class="nav-item mx-2">
    <a class="nav-link <?php if ($page=="contact.php") {echo "active";} else {echo "noactive";} ?> main-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <!-- navbar ends -->

<?php
$typeofpropertyErr=$typeofareaErr="";
$typeofproperty=$typeofarea="";

if (isset($_POST['submitbutton'])) {

  if (empty($_POST['type-of-property'])) {
    $typeofpropertyErr="Need to select any one*";
  }
  else {
    $typeofproperty=$_POST['type-of-property'];
  }
  if (empty($_POST['type-of-area'])) {
    $typeofareaErr="Need to select atleast any one*";
  }
  else {
    $typeofproperty=$_POST['type-of-area'];
  }

}




 ?>





    <!-- modal -->
    <div class="modal-container">

<a href="quotation.php">  <button type="button" class="btn sub_btn me-4 modal-button" >
    Free Quote!
  </button></a>


    <!-- Modal -->
    <div class="modal" id="first-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" style="color:#000000 !important">
              What type of property is this for?
            </h3>
            <button class="btn-close" type="button" data-bs-dismiss="modal" name="modal1-button"></button>
          </div>


          <div class="modal-body  " style=" background-image: url(assets/images/modal-back1.jpg);">
         <form class="modal-form1" action="header.php" method="post" >

           <input type="radio" name="type-of-property" value="Residential" id="modal-form1" >
           <label   for="1radio1">Residential</label><br>
           <input type="radio" name="type-of-property" value="Custom Painting" id="modal-form1" >
           <label  for="1radio2">Custom Painting <span class="badge bg-danger modal-badge1">New</span> </label><br>
           <input type="radio" name="type-of-property" value="Other" id="1radio3" >
           <label  for="1radio3">Other</label>
           <?php echo $typeofpropertyErr; ?>

         </form>
          </div>

          <div class="modal-footer">
            <?php echo $typeofpropertyErr; ?>

            <button type="submit" class="btn btn-primary" name="submitbutton"  value="Continue" >Continue</button>
          </div>

        </div>

      </div>

    </div>
<!-- second -->


<div class="modal" id="second-modal">
 <div class="modal-dialog">
   <div class="modal-content second-modal">
     <div class="modal-header">
       <h3 class="modal-title" style="color:#000000 !important">
        Which room(s) need decorating?      <!--needs multiple select option -->
       </h3>
       <button class="btn-close" type="button" data-bs-dismiss="modal" name="modal1-button"></button>
     </div>

<?php

?>


     <div class="modal-body" style=" background-image: url(assets/images/modal-back1.jpg);">
      <form class="modal-form2" action="header.php" method="post">
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
      </form>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-light btn-sm back-button" name="button" data-bs-toggle="modal" data-bs-target="#first-modal" >Back</button>
       <button type="button" class="btn btn-primary" name="submitbutton" data-bs-toggle="modal" data-bs-target="#third-modal" >Continue</button>


     </div>

   </div>

 </div>

</div>
    <!-- third -->
    <div class="modal" id="third-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" style="color:#000000 !important">
              What is the current condition of the surfaces to be painted?
            </h3>
            <button class="btn-close" type="button" data-bs-dismiss="modal" name="modal3-button"></button>

          </div>



          <div class="modal-body" style=" background-image: url(assets/images/modal-back1.jpg);">
           <form class="modal-form3" action="backend.php" method="post">
             <input type="radio" name="type-of-surface" value="Excellent" id="modal-form3">
             <label for="modal-form3" style="display:inline">Excellent <span class="surface-span">(clean and smooth)</span></label> <br>
             <input type="radio" name="type-of-surface" value="Good" id="modal-form3">
             <label for="modal-form3">Good <span class="surface-span">(only minor scratches/dents)</span> </label><br>
             <input type="radio" name="type-of-surface" value="Poor" id="modal-form3">
             <label for="modal-form3">Poor <span class="surface-span">(major repairs needed)</span>  </label><br>
             <input type="radio" name="type-of-surface" value="Other" id="modal-form3">
             <label for="modal-form3">Other</label>
           </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-sm back-button" name="button" data-bs-toggle="modal" data-bs-target="#second-modal" >Back</button>

            <button type="button" class="btn btn-primary" name="button" data-bs-toggle="modal" data-bs-target="#fourth-modal" >Continue</button>
          </div>

        </div>

      </div>

    </div>
    <!-- fourth -->
    <div class="modal" id="fourth-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" style="color:#000000 !important">
              When do you want this decorating carried out?

            </h3>
            <button class="btn-close" type="button" data-bs-dismiss="modal" name="modal4-button"></button>

          </div>
          <div class="modal-body" style=" background-image: url(assets/images/modal-back1.jpg);">
           <form class="modal-form4" action="backend.php" method="post">
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
           </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-sm back-button" name="button" data-bs-toggle="modal" data-bs-target="#third-modal" >Back</button>

            <button type="button" class="btn btn-primary" name="button" data-bs-toggle="modal" data-bs-target="#fifth-modal" >Continue</button>
          </div>

        </div>

      </div>

    </div>
    <!-- fifth -->
    <?php
    $nameErr='';

if (isset($_POST['submitbutton5'])) {


if (empty($_POST['name'])) {
  $nameErr="Name is required*";

}
else {
  $name=$_POST['name'];
}
}

     ?>
    <div class="modal" id="fifth-modal">
      <div class="modal-dialog">
        <div class="modal-content" style="height:35rem !important">
          <div class="modal-header">
            <h3 class="modal-title" style="color:#000000 !important">
              Personal Information

            </h3>
            <button class="btn-close" type="button" data-bs-dismiss="modal" name="modal5-button"></button>

          </div>
          <div class="modal-body" style=" background-image: url(assets/images/modal-back1.jpg);">
            <form class="modal-form5" action="backend.php" method="post">
              <ul>
                <?php echo $nameErr; ?>
                <li> <input id="name" type="text" name="name" value="" placeholder="Your Full name*"> </li>
                <li><input id="email" type="email" name="email" value="" placeholder=" Your Email*"></li>
                <li> <input id="phonenumber" type="tel" name="phonenumber" value="" placeholder="Your Phone Number*"> </li>
                <li> <textarea name="message" rows="3" placeholder="Type your message here..."></textarea> </li>
              </ul>

            </form>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn btn-light btn-sm back-button" name="button" data-bs-toggle="modal" data-bs-target="#fourth-modal" >Back</button>

            <button type="button" class="btn btn-primary" name="submitbutton5" data-bs-dismiss="modal" style="margin:0">ThankYou</button>
          </div>

        </div>

      </div>

    </div>
</div>


  </div>
</nav>
<!-- navbar ends -->
