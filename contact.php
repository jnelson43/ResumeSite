<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$body = $_POST['message'];
$antispam = $_POST['antispam'];
$solution = $_POST['antiSpamSolution'];
$from = $_POST['email'];

if($antispam == $solution) {
  $mail = new PHPMailer(); // create a new object
  try {
      //Server settings
      $mail->SMTPDebug = 0;                                       // Enable verbose debug output
      $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'email-smtp.us-west-2.amazonaws.com;email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'AKIATG3SFWZO7NQA2MNG';                     // SMTP username
      $mail->Password   = 'BO6aVKJu2wfWGEjoSDoUySmJLbf8UdExJLkMvHdTdo21';                               // SMTP password
      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('info@youneedjamesnelson.com');
      $mail->addAddress('jnelson3465@gmail.com');     // Add a recipient
      $mail->addReplyTo($from);

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'YouNeedJamesNelson';
      $mail->Body    =  $body;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
  ?>
      <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You!</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
  <article>
    
    <section>
      <h2>Thank you for reaching out! I will be in touch.</h2>
      <p>If for whatever reason you believe this message was not sent correctly, feel free to email me directly at jnelson3465@gmail.com</p>
      <form action='index.html'>
       <button class="btnSuccess">Home</button>
     </form>
   </section>
  </body>
  </html>
  <style>
  .btnSuccess{
    outline: none;
    border: none;
    cursor: pointer;
    display: block;
    position: relative;
    background-color: #5EB5C4;
    font-size: 16px;
    font-weight: 300px;
    color: white;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 25px 80px;
    margin: 0 auto;
    border-radius: 20px;
    box-shadow: 0 6px#407A85;
  }
  .btnSuccess:hover {
    box-shadow: 0 4px #407A85;
    top: 2px;
  }
  .btnSuccess:active{
    box-shadow: none;
    top: 6px;
  }
  h2, p{
  	text-align: center;
  }

  html {
    font: normal 16px sans-serif;
    color: #555;
  }

  </style>

  <?php     
  } catch (Exception $e) {
  ?>

  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uh Oh!</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
  <article>
    
    <section>
      <h2>Something went wrong</h2>
      <p>This message was not sent correctly, feel free to email me directly at jnelson3465@gmail.com</p>
      <form action='index.html'>
       <button class="btnSuccess">Home</button>
     </form>
   </section>
  </body>
  </html>
  <style>
  .btnSuccess{
    outline: none;
    border: none;
    cursor: pointer;
    display: block;
    position: relative;
    background-color: #5EB5C4;
    font-size: 16px;
    font-weight: 300px;
    color: white;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 25px 80px;
    margin: 0 auto;
    border-radius: 20px;
    box-shadow: 0 6px#407A85;
  }
  .btnSuccess:hover {
    box-shadow: 0 4px #407A85;
    top: 2px;
  }
  .btnSuccess:active{
    box-shadow: none;
    top: 6px;
  }
  h2, p{
    text-align: center;
  }

  html {
    font: normal 16px sans-serif;
    color: #555;
  }

  </style>
<?php     
}
}else {

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uh Oh!</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
  <article>
    
    <section>
      <h2>Something went wrong</h2>
      <p>Anti-Spam Failed please try again</p>
      <form action='index.html#contact'>
       <button class="btnSuccess">Home</button>
     </form>
   </section>
  </body>
  </html>
  <style>
  .btnSuccess{
    outline: none;
    border: none;
    cursor: pointer;
    display: block;
    position: relative;
    background-color: #5EB5C4;
    font-size: 16px;
    font-weight: 300px;
    color: white;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 25px 80px;
    margin: 0 auto;
    border-radius: 20px;
    box-shadow: 0 6px#407A85;
  }
  .btnSuccess:hover {
    box-shadow: 0 4px #407A85;
    top: 2px;
  }
  .btnSuccess:active{
    box-shadow: none;
    top: 6px;
  }
  h2, p{
    text-align: center;
  }

  html {
    font: normal 16px sans-serif;
    color: #555;
  }

  </style>
<?php 
}
?>