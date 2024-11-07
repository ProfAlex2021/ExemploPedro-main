<?php
    include_once('exemplo.php');
    $t = $_POST['txtValor'];
?><!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Função com e sem retorno.</title>
</head>

<body>
    <h1 class="w3-container w3-teal ">ECHO:<?php echo parImparRetorno($t) ?></h1>
    <h2 class="w3-container w3-teal ">VOID:<?php parImparVoid($t) ?></h2>
</body>

</html>