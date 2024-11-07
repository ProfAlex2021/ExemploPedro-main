<?php

function parImparRetorno($valor)
{
    $resto = $valor % 2;
    if ($resto == 0)
        return "PAR";
    else
        return "IMPAR";
}
function parImparVoid($valor)
{
    $resto = $valor % 2;
    if ($resto == 0)
        echo "PAR";
    else
        echo "IMPAR";
}