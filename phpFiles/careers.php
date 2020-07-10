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
<link rel="stylesheet" href="css/careers.css">



</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


  <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>







        <header>
          <img class="logo" src="https://res.cloudinary.com/dpkc4qim2/image/upload/v1586550467/b7h6k3y7pfjqvbc4gz1l.jpg" onclick="window.location.href='index'">
          <nav class="startnav" id="myStartnav">
            <ul class="nav-links">
              <li> <a href="index" target="_self" data-scroll="Home"> Home </a> </li> 
              <li> <a href="About" target="_self" data-scroll="About-us"> About us </a> </li> 
              <!-- 
              <li> <a  href="solutions" target="_self" data-scroll="solutions"> solutions </a> </li> 
-->

<li> 
                <div class="dropdown">
                <a  href="solutions"  data-scroll="home"> solutions 
                  <i class="fa fa-arrow-up" aria-hidden="true" id="drooDownArrow"></i>
                  <div class="dropdown-content">
            <a href="solutions#solutionProject1" class="dropdown-contentA1">SMART MOBILITY ENABLING SOFTWARE SERVICES  </a>
          <a href="solutions#solutionProject2"   class="dropdown-contentA2">VR- BASED PASSENGER- CENTRIC EXPERIENCE DESIGN  </a>
           <a href="solutions#solutionProject3"  class="dropdown-contentA3">HYPERLOOP LAB FACILITY </a>
                  </div>
                </div>
              </a>  
          </li> 

          
              <li> <a href="#" data-scroll="careers"> careers </a> </li> 
              <li> <a href="insights" data-scroll="insights"> insights </a> </li>                    
              <li> <a href="contactform"  target="_self" data-scroll="contactform"> contact us </a> </li> 
            </ul>
    

              <div class="screencontent"> 
                <label for="openContent" class="open"> <i class="fas fa-bars"> </i> </label>
                <input type="checkbox" id="openContent" style="display:none;" />
                <div id="myContent" class="content">
                    <li> <a  href="index" target="_self" class="content1 selected" data-scroll="Home"> Home  </a>  </li> 
                    <li> <a href="About" target="_self" class="content3" data-scroll="About-us"> About us   </a>  </li> 
                    <!-- 
                    <li> <a href="solutions" target="_self"  class="content3" data-scroll="solutions"> solutions  </a>  </li> 
-->


<li id="hit"> 
                              
                              <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" 
                                  data-target="#collapseOne">
                                  <a href="#" target="_self"  class="content3" data-scroll="solutions"> solutions   </a> 
                                  </div>
                               
        
                                  <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      <a href="solutions#solutionProject1" id="dropdown-contentA1-mobile">SMART MOBILITY ENABLING SOFTWARE SERVICES  </a> <br>
                                      <a href="solutions#solutionProject2"  id="dropdown-contentA2-mobile">VR- BASED PASSENGER- CENTRIC EXPERIENCE DESIGN  </a> <br>
                                       <a href="solutions#solutionProject3" id="dropdown-contentA3-mobile">HYPERLOOP LAB FACILITY </a>
                                                        </div>
                                                   
        
                                  </div>
        
                                </div>
                              </div>
                            </li>
                         
        
                    <li> <a href="#"   class="content4" data-scroll="careers"> careers  </a>  </li> 
                    <li> <a href="insights"   class="content5" data-scroll="insights"> insights  </a>  </li> 
                    <li> <a href="contactform" target="_self"   class="content6" data-scroll="contact-us"> contact us  </a>  </li>   
              </div>
            </nav>
          </header>   


          <section>
            <?php echo $result; ?>
        </section>




<div class="career-head">
<section class="career-head-text-phone"> 
<h3 class="CH3-1"> FROM   </h3> 
<h3 class="CH3-2">   DM TECH   </h3> 
<h3 class="CH3-3">  TO   </h3> 
<h3 class="CH3-4">    YOU  </h3> 
</section>
</div> 

<p class="career-head-content-p"> We appreciate your interest in our mission and activities. As we believe in integrated society for a better future, we hope we can be part of your present and future success.</p>







<div class="career-second-contentTwo"> 

    <h3> Interested? </h3>
    <p> Fill our career form now and our team will contact you soon. Or email us at <span>  info@disruptivemobility.com  </span> </p> 
    
        
    </div>
    

    <br>
    <form class="careers-form" id="sectionForm" action="process.php" method="POST"  enctype="multipart/form-data"> 


        <h3 class="NameSectionh3">  Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    

        <h3 class="EmailSectionh3">  Email  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
        
        <br> 
        <textarea class="Name-interested-Section"  name="username" type="text" aria-required="true" aria-invalid="false" required></textarea>  
        <textarea class="Email-interested-section"  name="email" type="email" aria-required="true" aria-invalid="false" required></textarea>  
        <br> 




        <h3 class="PhoneSectionh3">  Phone  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
        <h3 class="AddressSectionh3">  Address  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    



        <textarea class="Phone-interested-section"  name="cellphone" type="number"  aria-required="true" aria-invalid="false" required></textarea>  
        <textarea class="Address-interested-section" name="Address" type="text"  aria-required="true" aria-invalid="false" required></textarea>    


        <h3 class="MajorSection">  Major  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
        <h3 class="CurrentOccupationSection">  Current Occupation  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    


        <select class="Major" name="major" required >
             <option value="">  select.. </option>         
             <option class="Engineering">Engineering</option>
             <option value="Architecture">Architecture</option>
             <option value="Product Design">Product Design </option>
             <option value="Software Development">Software Development</option>
             <option value="VR/AR">VR/AR</option>
             <option value="ML/AI">ML/AI</option>
             <option value="others">others</option>


           </select>
  


        <input class="CurrentOccupation"  name="CurrentOccupation" type="text"  aria-required="true" aria-invalid="false" required>    


        <h3 class="InterestedinSection">  Interested in  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
        <h3 class="AttachcvSection">  Attach your Resume <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    


        <select class="Interestedin-select" name="interestedin"  required>
        <option value="">  select.. </option>             
           <option class="Internship/ Training">Internship/ Training</option>
           <option value="Part-time job">Part-time job</option>
           <option value="Full-time job">Full-time job </option>
           <option value="Hyperloop Summer School">Hyperloop Summer School</option>
         </select>
         <input class="Attach-input" >   
         <input class="Attach" type="file" multiple="multiple" name="attach_file[]"  aria-required="true" aria-invalid="false" required>   






         
 <h3 class="knowwaySection">  How did you know about us?  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
<br> 

<section class="knowwhyOptions" name="knowwhyOptions" id="sectionForm" >
 <input type="checkbox" id="website"  name="knowOptions[]" value="website"> 
 <label class="knowwhy-website">Website </label>

 <input type="checkbox" id="socialmedia" name="knowOptions[]" value="Social Media">
 <label class="socialmedia"> Social Media</label>

 <input type="checkbox" id="AnEvent" name="knowOptions[]" value="An Event">
 <label class="Event">An Event</label>

 <input type="checkbox" id="publishings" name="knowOptions[]" value="through our publishings">
 <label class="publishings">Through our Publishings</label>

 <input type="checkbox" id="friend" name="knowOptions[]" value="through A friend">
 <label class="friend">Through a Friend</label>

 <input type="checkbox" id="others" name="knowOptions[]" value="others">
 <label class="others">Others</label>
 </section> 

<br>
<button type="submit" class="btn center-block" id="interestedformbutton">  Submit  </button>


    </form>


    <!-- 

// contact form for mobile version  */ 


    -->
      <form class="careers-form-phone" id="sectionForm_phone" action="process.php" method="POST" enctype="multipart/form-data" > 


      <h3 class="NameSectionh3-phone">  Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <textarea class="Name-interested-Section-phone"  name="username" type="text" aria-required="true" aria-invalid="false" required></textarea> 
      <br> 
    
      <h3 class="EmailSectionh3-phone">  Email  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <textarea class="Email-interested-section-phone"  name="email" type="email"  aria-required="true" aria-invalid="false" required></textarea>  
      <br> 
    
    
      <h3 class="PhoneSectionh3-phone">  Phone  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <textarea class="Phone-interested-section-phone" name="cellphone" type="number" aria-required="true" aria-invalid="false" required></textarea>   
    
      <br> 
    
    
      <h3 class="AddressSectionh3-phone">  Address  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <textarea class="Address-interested-section-phone"  name="Address" type="text"  aria-required="true" aria-invalid="false" required></textarea>  
      <br> 
    
      <h3 class="MajorSection-phone">  Major  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
      <select class="Major-phone" name="major"  required>
             <option value="">  select..</option>
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
      <textarea class="CurrentOccupation-phone" type="text" name="CurrentOccupation"  aria-required="true" aria-invalid="false" required ></textarea>   
      <br> 
    
    
      <h3 class="InterestedinSection-phone">  Interested in  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>  
      <select class="Interestedin-select-phone" name="interestedin" required >
           <option value="">  select..</option>
         <option value="Internship/ Training-phone">Internship/ Training</option>
         <option value="Part-time job">Part-time job</option>
         <option value="Full-time job">Full-time job </option>
         <option value="Hyperloop Summer School">Hyperloop Summer School</option>
       </select>
  
        <br> 
    
    
    <h3 class="AttachcvSection-phone">  Attach your Resume <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
    
    <input class="Attach-input-phone"  >   
    <input class="Attach-phone" type="file" multiple="multiple" name="attach_file[]"  aria-required="true" aria-invalid="false" required>   
 <br>




       <h3 class="knowwaySection-phone" required>  How did you know about us?  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
           
       <section class="knowwhyOptions" name="knowwhyOptions"  id="myCheck" required>

        <input type="checkbox" id="website_phone" name="knowOptions[]" value="website"> 
        <label class="knowwhy-website">Website </label>
       
        <input type="checkbox" id="socialmedia_phone" name="knowOptions[]" value="Social Media">
        <label class="socialmedia"> Social Media</label>
       
        <input type="checkbox" id="AnEvent_phone" name="knowOptions[]" value="An Event">
        <label class="Event">An Event</label>
       
        <input type="checkbox" id="publishings_phone" name="knowOptions[]" value="through our publishings">
        <label class="publishings">Through our Publishings</label>
       
        <input type="checkbox" id="friend_phone" name="knowOptions[]" value="through A friend">
        <label class="friend">Through a Friend</label>
       
        <input type="checkbox" id="others_phone" name="knowOptions[]" value="others">
        <label class="others">Others</label>
       
       <br>

       </section> 

       <button type="submit" class="btn center-block" id="interestedformbutton-phone"> Submit  </button>
        
</form>


<!-- Footer -->
<footer class="page-footer font-small">

  <div class="container-fluid text-center">

    <div class="row">

      <div class="col-md-6 col-sm-12 col-xs-12">

        <section class="footer-icons"> 
          <!-- 
        <i class="fa fa-home" id="footerI"></i>
        <span class="footerSpan"> 16 Omar Ibn Elkhatab St, Sheraton Heliopolis, Cairo, Egypt </span> 
        -->
      <br>
        <i class="fa fa-phone fa-flip-horizontal"  id="footerI"></i>
        <span class="footerSpan"> (+2) 02 2269 1755 </span>
        <br>
        <i class="fa fa-envelope"  id="footerI"></i>
         <span class="footerSpan"> info@disruptivemobility.com  </span>
         <br>

        <i class="fa fa-globe"  id="footerI"></i>
        <span class="footerSpan"> https://www.disruptivemobility.com  </span>
    
        </section>

      </div>


      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="footer-sectionTwo"> 
        <!-- Content -->
        <section class="footer-social">
          <a href="#"> <i class="fab fa-facebook"> </i>   </a> 
      
          <a href="#"> <i class="fab fa-twitter"> </i>  </a>
          <a href="#"> <i class="fab fa-linkedin">  </i>  </a>
        </section>
      <p class="footer-copyright"> 
        Copyright © 2020 DM TECH. All Rights reserved </p>
      </div>


      </div>

    </div>

  </div>

</footer>
<br> 


<script type="text/javascript" src="js/careers.js"> </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>



