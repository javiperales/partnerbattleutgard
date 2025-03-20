<!DOCTYPE html>
<?php
// Incluir los archivos de PHPMailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$existe = isset($_COOKIE['cc_cookie']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!$existe) {
        header("Location: /index");
        exit();
    }
    // Filtrar los datos del formulario
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $enterprise = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    
    // Enviar correo al administrador
    $mailAdmin = new PHPMailer(true);
    try {
        $mailAdmin->isSMTP();
        $mailAdmin->Host       = SMTP_HOST;          
        $mailAdmin->SMTPAuth   = true;
        $mailAdmin->Username   = SMTP_USER;       
        $mailAdmin->Password   = SMTP_PASSWORD;            
        $mailAdmin->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
        $mailAdmin->Port       = SMTP_PORT;   
        $mailAdmin->CharSet = 'UTF-8';
        
        $mailAdmin->setFrom('crossfitutgard@hotmail.com', 'Utgard Partners Battle');
        $mailAdmin->addAddress('crossfitutgard@hotmail.com');
        
        // Contenido del correo al administrador
        $mailAdmin->isHTML(true);
        $mailAdmin->Subject = 'Nuevo mensaje de Interesado en Partners Battle Utgard';
        $mailAdmin->Body = '<h1>Detalles del mensaje</h1>
                            <p><strong>Nombre:</strong>' .$name.'</p>
                            <p><strong>Apellidos:</strong><br>' .$surname.'</p>
                            <p><strong>Email:</strong> ' . $email . '</p>
                            <p><strong>Telefono:</strong><br>' . $enterprise . '</p>
                            <p><strong>Mensaje:</strong><br>' . nl2br($msg) . '</p>';
        $mailAdmin->AltBody = "Nombre: $name\nEmail: $email\nTelefono: $enterprise\nMensaje: $msg";

        // Enviar correo al administrador
        $mailAdmin->send();

        // Enviar correo de confirmación al cliente
        $mailCliente = new PHPMailer(true);
        $mailCliente->isSMTP();
        $mailCliente->Host       = SMTP_HOST;          
        $mailCliente->SMTPAuth   = true;
        $mailCliente->Username   = SMTP_USER;       
        $mailCliente->Password   = SMTP_PASSWORD;            
        $mailCliente->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
        $mailCliente->Port       = SMTP_PORT;   
        $mailCliente->CharSet = 'UTF-8';
        
        $mailCliente->setFrom('crossfitutgard@hotmail.com', 'Utgard Partners Battle');
        $mailCliente->addAddress($email); // Enviar al correo del cliente
        $mailCliente->addReplyTo('crossfitutgard@hotmail.com', 'Utgard Partners Battle');

        // Contenido del correo de confirmación
        $mailCliente->isHTML(true);
        $mailCliente->Subject = 'Formulario Enviado Correctamente';
        $mailCliente->Body = 'Hola ' . $name . ',<br><br>Gracias por ponerte en contacto con nosotros. Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.<br><br><br>Atentamente,<br>Utgard Partners Battle';
        
        $mailCliente->send();
       
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");
   
    
    } catch (Exception $e) {
      
        echo "El mensaje no pudo ser enviado. Error: {$mailAdmin->ErrorInfo}";
    
    }
}

?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
           
            window.location.href = "/index";
        });
    </script>
