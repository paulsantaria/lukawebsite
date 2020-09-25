<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $QueSeRevisa = $_POST['QueSeRevisa'];
    $presupuesto = $_POST['presupuesto'];
    $objetivos = $_POST['objetivos'];

    $mailTo = "hey@lukaymedia.com";
    $headers = "From: ".$email;
    $txt = "Solicitud de Revision Digital de la compañia: ".$company.".\n\n"."Nombre de representante ".$name.".\n\n"."Contenido : ".$QueSeRevisa.".\n\n"."Presupuesto : ".$presupuesto.".\n\n"."Objetivos : ".$objetivos;
    $asunto = "Revision Digital de: ".$company;


    mail($mailTo, $asunto, $txt, $headers);
    header("Location: https://lukaymedia.com/gracias/");
}