<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Nombre es requerido. ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["tel"])) {
    $errorMSG = "Telefono es requerido. ";
} else {
    $name = $_POST["tel"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Correo Electrónico es requerido. ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "El mensaje es requerido. ";
} else {
    $message = $_POST["message"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Aceptar los términos es requerido. ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = $email;
$Subject = "🌐 Nuevo mensaje de Cliente Potencial | Curso de Excel WEB";

// prepare email body text
$Body = "";
$Body .= "Nombre y Apellidos: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "Correo Electrónico: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Terminos y Condiciones: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Mensaje fallido. Vuelva a intentar.";
    } else {
        echo $errorMSG;
    }
}
?>