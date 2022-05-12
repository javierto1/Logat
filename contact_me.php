<?php
// check if fields passed are empty
if(empty($_POST['name'])      ||
   empty($_POST['phone'])     ||
   empty($_POST['email'])     ||
   empty($_POST['asunto'])    ||  
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      //echo $_POST;
   echo '1';
   return false;
   }
   
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];
   
// create email body and send it 
$to = 'vipi.desarrolloweb@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$subject = "Logat Contacto de:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$contenido = "Usted recibe este mensaje desde su sitio WEB.\n\n"."Aqui se muestran los detalles:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nAsunto: $asunto\n\nMessage:\n$message";
$header = "From:ventas@logat.com.ar\nReply-To:".$email_address."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido, $header)){
/*echo '<p class="alert alert-info">Mensaje enviado. Pronto te contactaremos '.$name.' </p>'; por cambio en el ajax*/ 
echo 'true';
} else{        
echo 'false';
}
?>