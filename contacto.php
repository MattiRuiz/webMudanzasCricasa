<?php
// primero detecto si me llega la informacion del formulario
if ($_POST) {
    // armo el mensaje
    $mensaje  = '<p>Nombre: ' . $_POST['nombre'] . '</p>';
    $mensaje .= '<p>Localidad de origen: ' . $_POST['o-localidad'] . '</p>';
    $mensaje .= '<p>Dirección: ' . $_POST['o-direccion'] . '</p>';
    $mensaje .= '<p>Depto: ' . $_POST['o-dpto'] . '</p>';
    $mensaje .= '<p>E-mail: ' . $_POST['email'] . '</p>';
    $mensaje .= '<p>Teléfono: ' . $_POST['telefono'] . '</p>';
    $mensaje .= '<p>Localidad de destino: ' . $_POST['d-localidad'] . '</p>';
    $mensaje .= '<p>Dirección de destino: ' . $_POST['d-direccion'] . '</p>';
    $mensaje .= '<p>Depto: ' . $_POST['d-dpto'] . '</p>';
    $mensaje .= '<p>Fecha de la mudanza: ' . $_POST['fecha'] . '</p>';
    $mensaje .= '<p>Mensaje: '. str_replace("\n", '<br />', $_POST['mensaje']) .'</p>';

    // preparo los encabezados
    $send_to = "MudanzasCricasa <matias.ruiz.dg@gmail.com>";
    $encabezados  = "MIME-Version: 1.0\n";
    $encabezados .= "Content-type: text/html; charset=iso-8859-1\n";
    $encabezados .= "From: ".$_POST['nombre']."<".$_POST['email'].">\n";
    $encabezados .= "X-Sender: ".$_POST['email']."\n";
    $encabezados .= "X-Mailer: PHP\n";
    $encabezados .= "X-Priority: 3\n";

    // seteo el asunto del mensaje
    $asunto = 'MudanzasCricasa: Nueva consulta en la web';

    // envio el mail con la funcion "send" de php
    $is_send = mail($send_to, $asunto, $mensaje, $encabezados);

    // muestro un mensaje al usuario
    if ($is_send) {
        echo 'El mensaje ha sido enviado con exito!';
    } else {
        echo 'No se pudo enviar el mensaje';
    }
} else {
    echo 'El formulario no fue enviado';
}
?>