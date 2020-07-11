<?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
      $mysql_host = "localhost";
      $mysql_username = "ahmdsalh_DMTECH";
      $mysql_password = "DM_2020_TECH_$$";
      $mysql_database = "ahmdsalh_DMTECH";
      
  
      $Affiliation = filter_var($_POST['Affiliation']);
      $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
      $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING );
      $email = filter_var($_POST['email'],  FILTER_SANITIZE_EMAIL);
      $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
      $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
      $occupation = filter_var($_POST['occupation'],FILTER_SANITIZE_STRING);
      $country = filter_var($_POST['country']);
      $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

      
  
  
      $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
      
      
      $statement = $mysqli->prepare("INSERT INTO contact_form (Affiliation, firstName, lastName, email, phone, company, occupation, country, message )VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
  
  
      $statement->bind_param('sssssssss', $Affiliation, $firstName, $lastName, $email, $phone, $company, $occupation, $country, $message ); 
      
      if($statement->execute()){
  
      }else{
          print $mysqli->error; 
  
      }
      
  
  
  
  
  }
  ?> 
  
  
  
  
  
  <?php
  
  
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth= true;       
  $mail->SMTPSecure='tls';
  $mail->Username='formfinal132@outlook.com';
  $mail->Password='Ahmed@01154365122';
  
  $mail->setFrom($_POST['email'],$_POST['firstName']);
  $mail->addAddress('fathywork7472@gmail.com');
  $mail->addReplyTo($_POST['email'],$_POST['firstName']);
  
  $mail->isHTML(true);
  $mail->Subject='DMTech contact form';
  $mail->Body= 'Affiliation: '.$_POST['Affiliation'].'<br> First Name: '.$_POST['firstName'].'<br> Last Name: '.$_POST['lastName'].'<br> email: '.$_POST['email'].
  '<br> phone: '.$_POST['phone'].'<br> company: '.$_POST['company'].'<br> occupation : '.$_POST['occupation']. '<br> country: '.$_POST['country'].
  '<br> message: '.$_POST['message'];     


  if(!$mail->send()){
  
  
    $result = " <div class='alert fade show' role='alert' id='fade-out-careersFaild'> 
          <p> 
        Thank you for reaching out! <br> <strong id='careersFaild-strong'> DMTECH team </strong> will contact you soon.  </p>   

        <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='closeButton'>
<span aria-hidden='true'>&times;</span>
</button>
</div> ";

    include ('contactform.php');
}
else {
    $result = " <div class='alert fade show' role='alert' id='fade-out-careersSuccess'> 
    <p> Thank you for reaching out! <br> <strong id='careersSucces-strong'> DMTECH team </strong> will contact you soon. </p>   

  <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='closeButton'>
<span aria-hidden='true'>&times;</span>
</button>
</div> ";

    include ('contactform.php');

}
?>


  


 
  
  
