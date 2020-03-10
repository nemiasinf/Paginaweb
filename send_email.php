<?php
function died($error)
{
  // your error code can go here
  $error_message = "";
  $error_message .= "Lo sentimos muchos, pero parece que hubo errores al momento que se envio el formulario. \n";
  //echo "We are very sorry, but there were error(s) found with the form you submitted. \n";
  $error_message .= "\nEstos son los errores:\n";
  //echo "These errors appear below.\n";
  $error_message .= $error;
  $error_message .= "\nPorfavor solucione estos errores.\n\n";
  //echo "Please fix these errors.\n";
  //die();
  return $error_message;
}

function clean_string($string)
{
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

/*
$fp = fopen('test.txt', 'w');
fwrite($fp, 'PERRO');
fclose($fp);
*/

//echo "comienzo\n";

if(isset($_POST['email']))
{
  // EDIT THE 2 LINES BELOW AS REQUIRED
  //$email_to = "alex@palgroup.mx, hola@soyhorizonte.com";
  $email_to = "contacto@ccitecnologia.com.mx";
  $email_subject = "Contacto desde CCI website";
  $email_cc = "freddy19garcia@gmail.com";
 
  //echo "pre-validacion\n";
  // validation expected data exists
  if(!isset($_POST['name']) ||
      !isset($_POST['surname']) ||
      !isset($_POST['email']) ||
      !isset($_POST['phone']) ||
      !isset($_POST['question']) ||
      !isset($_POST['subject']) ||
      !isset($_POST['about'])) {
      died("Parametros faltantes\n");       
  }

  //echo "post-validacion\n";
     
  $name = $_POST['name']; // required
  $surname = $_POST['surname']; // required
  $email = $_POST['email']; // required
  $phone = $_POST['phone']; // required
  $question = $_POST['question']; // required
  $subject = $_POST['subject']; // required
  $about = $_POST['about']; // required

  $error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email))
  {
    $error_message .= "- El Correo Electronico ingresado no parece ser valido.\n";
    //$error_message .= "The Email Address you entered does not appear to be valid.\n";
  }
 
  $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp, $name))
  {
    $error_message .= "- Su nombre no parece ser valido.\n";
    //$error_message .= "The Name you entered does not appear to be valid.\n";
  }

  if(!preg_match($string_exp, $surname))
  {
    $error_message .= "- Su apellido no parece ser valido.\n";
    //$error_message .= "The Surname you entered does not appear to be valid.\n";
  }
 
  if(strlen($about) < 1)
  {
    $error_message .= "- El mensaje principal parece estar vacio.\n";
    //$error_message .= "The Comments you entered do not appear to be valid.\n";
  }
 
  if(strlen($error_message) > 0)
  {
    $error_message = died($error_message);
    $result = "Fallo el envio\n";
  }
  //echo "validacion especifica\n";
 
  else{
    $email_message = "Form details below:\n\n";
    $email_message .= "Nombre(s): ".clean_string($name)."\n";
    $email_message .= "Apellido(s): ".clean_string($surname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telefono: ".clean_string($phone)."\n";
    $email_message .= "¿Como nos encontraste?: ".clean_string($question)."\n";
    $email_message .= "Asunto: ".clean_string($subject)."\n";
    $email_message .= "Cuentanos sobre ti: ".clean_string($about)."\n";

   
    //echo "limpieza de mensaje\n";


    // create email headers
    $headers = 'CC: '.$email_cc."\r\n".
    'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    //echo "creacion de headers\n";

    $success = mail($email_to, $email_subject, $email_message, $headers);
    //echo "correo enviado\n";
    if (!$success) {
      //echo "Fallo el envio\n";
      $errorMessage .= error_get_last()['message'];
      $error_message = "fallo";
      $result = "Fallo el envio\n";
    }
    else
    {
      //echo "Email enviado con exito!";
      $result = "Email enviado con exito!\n";
    }
  }
}
else
{
  $error_message = died("Faltaron parametros\n");
  $result = "Fallo el envio\n";
}

$response = array('error_message' => $error_message, 'result' => $result);
echo json_encode($response);

//echo "fin\n";

?>