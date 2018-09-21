<?php

function validar_campo($campo)
{
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}

 if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
 isset($_POST["correo"]) && !empty($_POST["correo"]) &&
 isset($_POST["mensaje"]) && !empty($_POST["mensaje"])){

    $destinoMail = "renzo.aguilar.rojas@gmail.com";
    $nombre = validar_campo($_POST["nombre"]);
    if (isset($_POST["telefono"])) {
        $telefono = validar_campo($_POST["telefono"]);
    }
    $correo= validar_campo($_POST["correo"]);
    $mensaje = validar_campo($_POST["mensaje"]);

    $contenido = "Nombre: " . $nombre . "\n Telefono: " . $telefono;
    $contenido = "\n Correo: " . $correo;
    $contenido = "\n Mensaje: " . $mensaje;

    mail($destinoMail, "Mensaje de contacto del cliente". $nombre, $contenido);
    return print("ok");
 }

 return print("no se puede enviar")
?>