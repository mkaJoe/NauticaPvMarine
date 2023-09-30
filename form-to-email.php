<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "mkajoe@gmail.com";  // falta correo empresarial
 
 $name = $_POST['name']; 
 $fromEmail = $_POST['email']; 
 $phone = $_POST['tel']; 
 $subject = $_POST['subject']; 
 $subject2 = "Confirmation: Message was submitted successfully | Yacht PV"; // For customer confirmation
 
 //Email body I will receive
 $message = "Nombre: " . $name . "\n"
 . "Numero de contacto: " . $phone . "\n\n"
 . "Mensaje: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear " . $name . "\n"
 . "Gracias por contactarnos. ¡Nos pondremos en contacto con usted a la brevedad!" . "\n\n"
 . "Enviaste el siguiente mensaje: " . "\n" . $_POST['message'] . "\n\n"
 . "Saludos," . "\n" . "- Yacht PV";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // client side
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); 
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "¡Su mensaje fue enviado exitosamente!";
  } else {
    $failed = "¡Lo sentimos! El mensaje no fue enviado, complete todos los campos requeridos.";
  }
 
}
 
?>