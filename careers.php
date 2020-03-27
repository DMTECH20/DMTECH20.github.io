<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
     $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     $cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
     $Address = filter_var($_POST['Address'],FILTER_SANITIZE_STRING);
     $major = filter_var($_POST['major']);
     $CurrentOccupation = filter_var($_POST['CurrentOccupation'], FILTER_SANITIZE_STRING);
     $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
     $interestedin = filter_var($_POST['interestedin'],FILTER_SANITIZE_STRING);





     // creating Array of Errors

     $formErrors = array ();
     if (strlen($user) <= 3) {
 
         $formErrors[] = 'username must be larger than <strong> 3 </strong> characters';
     } 

    



    $headers = 'from' .$mail . '\r\n';
    $myEmail = 'fathywork7472@gmail.com';
    $subject = 'contact form';

    if (empty($formErrors)) {

        mail($myEmail, $subject, $msg, $headers);

        $user = '';
        $mail = '';
        $cell = '';
        $Address = '';
        $major = '';
        $CurrentOccupation = '';
        $msg = '';
        $interestedin = '';
   
      $success = '<div class="alert alert-success"> we recieved it </div';



    }

}



?> 



<!DOCTYPE html>

<html>
<head>
  <title> disruptivemobility </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins&display=swap" rel="stylesheet">


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontawesome/all.min.css">
<link rel="stylesheet" href="css/careers-local.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


</head>

<body>


  <link rel="stylesheet" href="js/bootstrap.min.js">
  <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>





        <header>
          <img class="logo" src="pictures/logo.png" onclick="window.location.href='careers.html'">
          <nav class="startnav" id="myStartnav">
            <ul class="nav-links">
              <li> <a href="index.html" target="_self" data-scroll="Home"> Home </a> </li> 
              <li> <a href="About.html" target="_self" data-scroll="About-us"> About us </a> </li> 
              <li> <a  href="solutions.html" target="_self" data-scroll="solutions"> solutions </a> </li> 
              <li> <a href="#" data-scroll="careers"> careers </a> </li> 
              <li> <a href="#" data-scroll="insights"> insights </a> </li>                    
              <li> <a href="contactform.html"  target="_self" data-scroll="contactform"> contact us </a> </li> 
            </ul>
    

              <div class="screencontent"> 
                <label for="openContent" class="open"> <i class="fas fa-bars"> </i> </label>
                <input type="checkbox" id="openContent" style="display:none;" />
                <div id="myContent" class="content">
                    <li> <a  href="index.html" target="_self" class="content1 selected" data-scroll="Home"> Home  </a>  </li> 
                    <li> <a href="About.html" target="_self"  class="content2" data-scroll="About-us"> About us   </a>  </li> 
                    <li> <a href="solutions.html" target="_self"  class="content3" data-scroll="solutions"> solutions  </a>  </li> 
                    <li> <a href="#"   class="content4" data-scroll="careers"> careers  </a>  </li> 
                    <li> <a href="#"   class="content5" data-scroll="insights"> insights  </a>  </li> 
                    <li> <a href="contactform.html" target="_self"   class="content6" data-scroll="contact-us"> contact us  </a>  </li>   
              </div>
            </nav>
          </header>   


<div class="career-head">
<section class="career-head-text-phone"> 
<h3 class="CH3-1"> FROM   </h3> 
<h3 class="CH3-2">   DM TECH   </h3> 
<h3 class="CH3-3">  TO   </h3> 
<h3 class="CH3-4">    YOU  </h3> 
</section>
</div> 

<p class="career-head-content-p"> We appreciate your interest in our mission and activities. As we believe in integrated society for a better future, we hope we can be part of your present and future success.</p>




<!-- 
<section class="solutions-animation">

  <div class="solanimation1">
  <h3> Innovation </h3>
  </div>

    
  
    <div class="solanimation3">
      <h3> integrity </h3>
      </div>
      
  
  
<div class="career-second-contentOne"> 

<h3> what are we Looking for? </h3>
<p> Although our projects are based on high-end technologies however, our innovation lies within integrating technology with creative design. Whether you have the technical skills, or the creative mindset, we would recommend you to contact us.</p> 


-->




<div class="career-second-contentTwo"> 

    <h3> Interested? </h3>
    <p> Fill our career form now and our team will contact you soon. Or email us at <span>  info@disruptivemobility.com  </span> </p> 
    
        
    </div>
    
    <br>
    <form class="careers-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<?php if (! empty($formErrors)) { ?>
    <div class="alert alert-danger alert-dismissible" role="start">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<?php

foreach($formErrors as $error) {
    echo $error . '<br/>';
}
?>
</div>
<?php } ?>



        <h3 class="NameSectionh3">  Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    

        <h3 class="EmailSectionh3">  Email  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
        
        <br> 
        <input class="Name-interested-Section" type="text" name="username"   aria-required="true" aria-invalid="false" 
                value="<?php if (isset($user)) { echo $user; } ?>" required/>   
                <input class="Email-interested-section" type="text" name="email"  aria-required="true" aria-invalid="false" 
                 value="<?php if (isset($mail)) { echo $mail; } ?>" required />   
        
        <br> 




        <h3 class="PhoneSectionh3">  Phone  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
        <h3 class="AddressSectionh3">  Address  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    



        <input class="Phone-interested-section" type="text" name="cellphone" type="submit" aria-required="true" aria-invalid="false" 
               value="<?php if (isset($cell)) { echo $cell; } ?>" required />   
   
        <input class="Address-interested-section" type="text" name="Address" type="submit"  aria-required="true" aria-invalid="false" 
              value="<?php if (isset($Address)) { echo $Address; } ?>" required/>   


        <h3 class="MajorSection">  Major  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
        <h3 class="CurrentOccupationSection">  Current Occupation  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    


        <select class="Major" name="major" value="<?php if (isset($major)) { echo $major; } ?>" required>   

          <option selected="selected">
              select..
               </option>
               
             <option class="Engineering">Engineering</option>
             <option value="Architecture">Architecture</option>
             <option value="Product Design">Product Design </option>
             <option value="Software Development">Software Development</option>
             <option value="VR/AR">VR/AR</option>
             <option value="ML/AI">ML/AI</option>
             <option value="others">others</option>


           </select>
  


        <input class="CurrentOccupation" type="text" name="CurrentOccupation" type="submit"  aria-required="true" aria-invalid="false" 
              value="<?php if (isset($CurrentOccupation)) { echo $CurrentOccupation; } ?>" required/>   
   


        <h3 class="InterestedinSection">  Interested in  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
        <h3 class="AttachcvSection">  Attach your Resume <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    

        <!-- 
        <h3 class="ShortBioSection">  Short Bio  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
-->   
        <select class="Interestedin-select" name="interestedin" value="<?php if (isset($interestedin)) { echo $interestedin; } ?>" required>   
>
        <option selected="selected">
            select..
             </option>
             
           <option class="Internship/ Training">Internship/ Training</option>
           <option value="Part-time job">Part-time job</option>
           <option value="Full-time job">Full-time job </option>
           <option value="Hyperloop Summer School">Hyperloop Summer School</option>
         </select>


         <input class="Attach-input" type="text" name="Attach" type="submit"  aria-required="true" aria-invalid="false" 
               value="<?php if (isset($Attach)) { echo $Attach; } ?>" />   
   
         <input class="Attach" type="file"  aria-required="true" aria-invalid="false" multiple required >   


<!--- 
         <input class="ShortBio" type="text" name="Name" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
 -->




         
 <h3 class="knowwaySection">  How did you know about us?  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
 <!-- 
 <input class="knowwhy" type="text" name="Name" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
-->
<br> 

<section class="knowwhyOptions" name="knowwhyOptions">
 <input type="checkbox" id="website" name="website" value="website"> 
 <label class="knowwhy-website">Website </label>

 <input type="checkbox" id="socialmedia" name="socialmedia" value="Social Media">
 <label class="socialmedia"> Social Media</label>

 <input type="checkbox" id="AnEvent" name="Event" value="An Event">
 <label class="Event">An Event</label>

 <input type="checkbox" id="publishings" name="publishings" value="through our publishings">
 <label class="publishings">Through our Publishings</label>

 <input type="checkbox" id="friend" name="friend" value="through A friend">
 <label class="friend">Through a Friend</label>

 <input type="checkbox" id="others" name="others" value="others">
 <label class="others">Others</label>
<br>
         <button type="submit" class="btn center-block" id="interestedformbutton" > Submit  </button>

        </section>
  

</form>
    <!-- 

// contact form for mobile version  */ 


    -->
    <section class="careers-form-phone">


      <h3 class="NameSectionh3-phone">  Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <input class="Name-interested-Section-phone" type="text" name="username" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
      <br> 
    
      <h3 class="EmailSectionh3-phone">  Email  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <input class="Email-interested-section-phone" type="text" name="email" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
      <br> 
    
    
      <h3 class="PhoneSectionh3-phone">  Phone  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <input class="Phone-interested-section-phone" type="text" name="cellphone" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
    
      <br> 
    
    
      <h3 class="AddressSectionh3-phone">  Address  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <input class="Address-interested-section-phone" type="text" name="Address" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
      <br> 
    
      <h3 class="MajorSection-phone">  Major  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <select class="Major-phone" name="major">
        <option selected="selected">
            select..
             </option>
             
           <option class="Engineering">Engineering</option>
           <option value="Architecture">Architecture</option>
           <option value="Product Design">Product Design </option>
           <option value="Software Development">Software Development</option>
           <option value="VR/AR">VR/AR</option>
           <option value="ML/AI">ML/AI</option>
           <option value="others">others</option>


         </select>

      <br> 
    
    
      <h3 class="CurrentOccupationSection-phone">  Current Occupation  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <input class="CurrentOccupation-phone" type="text" name="CurrentOccupation" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
      <br> 
    
    
      <h3 class="InterestedinSection-phone">  Interested in  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>  
      <select class="Interestedin-select-phone" name="interestedin">
        <option selected="selected">
          select..
           </option>
           
         <option class="Internship/ Training-phone">Internship/ Training</option>
         <option value="Part-time job">Part-time job</option>
         <option value="Full-time job">Full-time job </option>
         <option value="Hyperloop Summer School">Hyperloop Summer School</option>
       </select>
    
    
    
        <br> 
    <!--- 

      <h3 class="ShortBioSection-phone">  Short Bio  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <input class="ShortBio-phone" type="text" name="Name" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
    
    -->
    
    
    <h3 class="AttachcvSection-phone">  Attach your Resume <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
    
    <input class="Attach-input-phone" type="text" name="Name" type="submit" value size="40" aria-required="true" aria-invalid="false" >   
    <input class="Attach-phone" type="file"  name="cv" type="submit" value size="40" aria-required="true" aria-invalid="false" multiple >   
 <br>

       <h3 class="knowwaySection-phone">  How did you know about us?  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
           
       <section class="knowwhyOptions">
        <input type="checkbox" id="website" name="website" value="website"> 
        <label class="knowwhy-website">Website </label>
       
        <input type="checkbox" id="socialmedia" name="socialmedia" value="Social Media">
        <label class="socialmedia"> Social Media</label>
       
        <input type="checkbox" id="AnEvent" name="Event" value="An Event">
        <label class="Event">An Event</label>
       
        <input type="checkbox" id="publishings" name="publishings" value="through our publishings">
        <label class="publishings">Through our Publishings</label>
       
        <input type="checkbox" id="friend" name="friend" value="through A friend">
        <label class="friend">Through a Friend</label>
       
        <input type="checkbox" id="others" name="others" value="others">
        <label class="others">Others</label>
       
       <br>

    
       <button type="button" class="btn center-block" id="interestedformbutton-phone" > Submit  </button>
        
    
    </section> 
    
  </section> 

<br> <br> <br> <br> 
<div class="footer">

  <h3> Contact Info </h3>



  <i class="fa fa-home" id="coi1" ></i>
  <span class="coi1-span"> 16 Omar Ibn Elkhatab St, Sheraton Heliopolis, Ca iro, Egypt </span> 


    <p  class="footer-allright">  &copy; DM Tech </p> 
    

    
    
  <i class="fa fa-phone fa-flip-horizontal" id="coi2"></i>
 
  <span class="coi2-span"> (+2) 02 2269 1755 </span>

<br>

  <i class="fa fa-globe"  id="coi3"></i>
  <span class="coi3-span"> https://www.disruptivemobility.com  </span>

  <i class="fa fa-envelope"  id="coi4"></i>
  <span class="coi4-span"> info@disruptivemobility.com  </span>
  


    <a href="#"> <i class="fab fa-facebook" id="footer-sociali-one"> </i>   </a> 

    <a href="#"> <i class="fab fa-twitter" id="footer-sociali-two"> </i>  </a>
    <a href="#"> <i class="fab fa-linkedin" id="footer-sociali-three">  </i>  </a>


</div> 


<div class="footer-phone" >

  <h3> Contact Info </h3>



  <i class="fa fa-home" id="coi1-phone" ></i>
  <span class="coi1-span-phone"> 16 Omar Ibn Elkhatab St, Sheraton Heliopolis, Cairo, Egypt </span> 

  <span class="coi1SpanPhone-Hidden"> 16 Omar Ibn Elkhatab St, Sheraton  </span> 

  <span class="coiAlignedspanMobile-Hidden"> Heliopolis, Cairo, Egypt </span>
  <br id="coi1SpanPhone-Hidden-space"> 

  <i class="fa fa-phone fa-flip-horizontal" id="coi2-phone"></i>
 
  <span class="coi2-span-phone"> (+2) 02 2269 1755 </span>

<br>

  <i class="fa fa-globe"  id="coi3-phone"></i>
  <span class="coi3-span-phone"> https://www.disruptivemobility.com  </span>
  <br>

  <i class="fa fa-envelope"  id="coi4-phone"></i>
  <span class="coi4-span-phone"> info@disruptivemobility.com  </span>
  

  <p  class="footer-allright-phone">  &copy; DM Tech </p> 

  <section class="footer-icons-phone">
    <a href="#"> <i class="fab fa-facebook" id="footer-sociali-one-phone"> </i>   </a> 

    <a href="#"> <i class="fab fa-twitter" id="footer-sociali-two-phone"> </i>  </a>
    <a href="#"> <i class="fab fa-linkedin" id="footer-sociali-three-phone">  </i>  </a>
  </section>

</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script type="text/javascript" src="js/careers.js"> </script>

</body>
</html>



