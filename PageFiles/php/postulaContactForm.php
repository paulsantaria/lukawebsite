<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $porque = $_POST['porque'];

    $mailTo = "hey@lukaymedia.com";
    $headers = "From: ".$email;
    $txt = "Nombre: ".$name.".\n\n".$porque;
    $asunto = "Postulacion de ".$name;


    mail($mailTo, $asunto, $txt, $headers);
    header("Location: https://lukaymedia.com/gracias/");
 }