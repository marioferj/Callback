<?php
/**
 * consulta
 * Creado por Mario Fernandez J
 * Fecha de Creacion 25/05/2019 12:06:27 PM
 * Permite consultar un Json recibido de hacienda desde cualquie otro
 * sistema por ejemplo un sistema en Desktop
 */
if (isset ($_GET['Clave']))
{
    $clave = trim($_GET['Clave']);
    $archivo = "./$clave.json";
    $json = @file_get_contents($archivo);
    if ($json)
    {
        echo $json;
        @unlink($archivo);
    }
    else
        echo '';
}
else
{
    echo '';
}
?>
