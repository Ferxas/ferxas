<?php
  /**
  * Requiere especificar "PHP Email Form" librería
  * La librería debe ser subida a: vendor/php-email-form/php-email-form.php
  * por si las moscas https://bootstrapmade.com/php-email-form/
  */

  // reemplazar por el email para recibir correos
  $receiving_email_address = 'ferxas321@hotmail.es';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'No se pudo enviar el formulario ):');
  }

  $contact = new PHP_Email_Form; //definir formulario PHP /*
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // quitar este comentario si quieres usar el servicio smtp. No olvidar las credenciales smtp
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
