<?php

$fromName   = requestPost('name');
putOld('name', $fromName);

$fromEmail  = requestPost('email');
putOld('email', $fromEmail);

$whatsapp    = requestPost('whatsapp');
putOld('whatsapp', $whatsapp);

$message    = requestPost('message');
putOld('message', $message);

$attachmentPath = null;
$attachmentName = null;

if (!$fromName || !$fromEmail || !filter_var($fromEmail, FILTER_VALIDATE_EMAIL) || !$message) {
    $error = '<div class="alert alert-danger" role="alert">Por favor preencha todos os campos.</div>';
    setFlash('error', $error);
    redirect('/#contact');
    die;
}

$body = <<<"HTML"
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <strong>Nome: </strong>{$fromName}<br>
    <strong>E-mail: </strong>{$fromEmail}<br>
    <strong>Whatsapp: </strong>{$whatsapp}<br><br>

    <strong>Mensagem:</strong>
    <p>{$message}</p>
</body>
</html>
HTML;

$logEmail = !!(CONFIG['email']['log']['enabled'] ?? false);

if ($logEmail) {
    $logBody = trim(strip_tags($message, '<br>'));
    $logBody = str_replace('<br>', "\n", $logBody);

    saveLog(
        [
            'Name'      => $fromName,
            'Email'     => $fromEmail,
            'Whatsapp'   => $whatsapp,
            'content'   => $logBody,
        ],
        'contact-form'
    );
}

try {
    sendEmail(
        $fromName,
        $fromEmail,
        $whatsapp,
        $body,
        $attachmentPath,
        $attachmentName
    );
} catch (\Throwable $th) {
    saveLog("\n" . __FILE__ . ':' . __LINE__ . "\n" . $th->getMessage(), 'error');

    if (DEBUG) {
        throw $th;
    }

    die('An error occurred. Please try again later.');
}

clearOld();

setFlash('success', '<div class="alert alert-success" role="alert">Sua mensagem foi enviada.</div>');

redirect('/#contact');
