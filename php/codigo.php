<?php
//Guardado de los datos del formulario 
$nombre = $_POST['name'];
$email = $_POST['email'];
$comentarios = $_POST['messeage'];
//$servicio = $_POST['servicio'];
//$servicio = $_POST['opcionesSelect'];

//Armado del mail
$to = 'sergioottati@hotmail.com';
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
              \n Nombre: $nombre 
              \n Correo: $email
              \n Mensaje o consulta: \n $comentarios \n"; 
$headers = "From: $email";

//Envió del mail
mail($to, $email_subject, $email_body, $headers); 
echo 'Pronto me estaré comunicando con usted!';
?>
<br>
<br>
<button><a href="https://proprietorial-model.000webhostapp.com/">Volver</a></button>