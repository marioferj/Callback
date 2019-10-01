<?php
/**
 * Callback
 * Creado por Mario Fernandez J
 * Fecha de Creacion 24/05/2019 09:17:19 AM
 * Recibe de hacienda la repuesta de una FE,NC,ND,TE y MR
 * En el paramatro calkbackUrl del JSON de envio del documento agregar 'http://sudominio.om/callback/index.php'
 */

//esta parte es solo para probar que si lo ejecuto hacienda
// Esta seccion SE PUEDE QUITAR
//date_default_timezone_set('America/Costa_Rica');
//$date = date('Y-M-d H:i'). "\n" ;
//file_put_contents('./log.txt',$date  , FILE_APPEND | LOCK_EX); // deja un log indicando que hacienda lo ejecuto.

try
{    
    $json = file_get_contents('php://input');
    $json = json_decode($json);
    $clave = str_replace('"','',json_encode($json->clave));
    $archivo = "./$clave.json";
    file_put_contents($archivo, json_encode($json)); 
    
    //http_response_code(200);
    header("HTTP/1.1 200 OK");    
}
catch (Exception  $e)
{
    echo '';
}
?>
