<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$EmailTo = "raquel.day@hotmail.com";
$Subject = "Mensagem via formulário de contato";
// prepare email body text
$Body = "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:" . $email);
// Resposta para a chamada do AJAX
if ($success) {
    echo "success";
} else {
    echo "invalid";
}