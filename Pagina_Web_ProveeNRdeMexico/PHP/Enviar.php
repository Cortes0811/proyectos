<?php

// LLamando a los campos
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Asunto = $_POST['Asunto'];
$Mensaje = $_POST['Mensaje'];

// Datos para el correo
$Destinatario = "ventas@proveedoraindustrialnrmexico.com.mx";
$asunto = "Contacto de la Pagina Web NR Mexico";

$carta = "De: $Nombre \n";
$carta .="Telefono: $Telefono \n";
$carta .="Correo: $Correo \n";
$carta .="Asunto: $Asunto \n";
$carta .="Mensaje: $Mensaje";

// Enviando un mensaje
mail($Destinatario, $asunto, $carta);
header('Location:/Mensaje.html')

?>