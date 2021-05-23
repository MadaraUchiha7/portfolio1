<?php 
 $name = $_REQUEST['name']; 
 $email = $_REQUEST['email']; 
 $project = $_REQUEST['project']; 
 $message = $_REQUEST['message']; 

 if(empty($name) || empty($email) || empty($project) || empty($message)){
     echo "Please fill all fields!";
 }
 else{
     mail("kazifirozahmed09@gmail.com", "Client Message", $message, "From: $name <$email> " );
     echo "<script type='text/javascript'>alert('Your message sent successfully');
     window.history.log(-1);
     </script>";
 }
 ?>
 