<style>
  body {
    margin: 0;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

 button{ 
  width: 9rem;       
  height: 2rem;
  padding: 1.6rem;
  border: none;
  color: rgb(79, 79, 229);
  border-radius: 25px;
  background-color: #51efa2;
  font-size: 2rem;
  display: flex;
  align-items: center;
  cursor: pointer;
}

button:hover{
  background-color: rgb(79, 79, 229);
  color: white;
  transition: all 0.2s ease;
}
button:hover > a{
  color: white;
  transition: all 0.2s ease;
}

a {
  text-decoration: none;
}

p {
  font-size: 2rem;
  align-items: center;
}

@media screen and (max-width: 767px) {
  :root {
    font-size: 14px;
  }
}
</style>

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
echo '<p>Pronto me estaré comunicando con usted!</p>';
?>
<br>
<br>
<button><a href="https://proprietorial-model.000webhostapp.com/">Volver</a></button>