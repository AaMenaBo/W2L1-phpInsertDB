<?php
date_default_timezone_set('America/Chicago');
function getConection()
{
    return $db = new PDO('mysql:host=localhost;dbname=web_lab1;charset=utf8', 'root', '');
}

function getData()
{
    //Conexion 
    $con = getConection();
    //Sentencia
    $sen = $con->prepare('SELECT * FROM pagos');
    $sen->execute();

    //Devolver valores
    $data = $sen->fetchAll(PDO::FETCH_OBJ);
    $con = null;
    return $data;
}

function insert($name, $nCuota, $aporte)
{
    //Conexion
    $con = getConection();
    //Sentencia
    $sen = $con->prepare(
        'INSERT INTO web_lab1.pagos (`deudor`,`cuota`,`couta_capital`,`fecha_pago`)'
            . 'VALUES(:name,:nCouta,:aporte, curdate());'
    );
    $sen->bindParam(':name', $name);
    $sen->bindParam(':nCouta', $nCuota);
    $sen->bindParam(':aporte', $aporte);

    //Retornar True si se inserto con exito o False en caso de fallo
    return $sen->execute();
}
