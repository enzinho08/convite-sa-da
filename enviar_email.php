<?php
require 'vendor/autoload.php'; // carrega o arquivo de autoload do SendGrid

use SendGrid\Mail\Mail;

$apiKey = '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'; // insira sua chave de API do SendGrid aqui

$email = new Mail();
$email->setFrom("enzoamancio17@gmail.com", "Enzo");
$email->setSubject("Resposta ao Pedido de Encontro");

// Recipientes de e-mail de teste - substitua com seu próprio e-mail ou use um formulário para coletar o endereço de e-mail do usuário
$email->addTo("enzoamancio17@gmail.com", "Enzo");
$email->addContent("text/plain", "Alguém respondeu ao pedido de encontro.");

$sendgrid = new \SendGrid($apiKey);

try {
    $response = $sendgrid->send($email);
    echo "E-mail enviado com sucesso!";
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>
