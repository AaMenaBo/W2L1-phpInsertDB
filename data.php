<?php
$name = '';
$cuota = 0;
$aporte = 0;
date_default_timezone_set('America/Chicago');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['inputName'])) {
        global $name;
        $name = $_POST['inputName'];
    }
    if (isset($_POST['inputCuota'])) {
        global $cuota;
        $cuota = $_POST['inputCuota'];
    }
    if (isset($_POST['inputAporte'])) {
        global $aporte;
        $aporte = $_POST['inputAporte'];
    }
}

function insertData()
{
    global $name, $cuota, $aporte;
    if (!isset($_POST['inputName'], $_POST['inputCuota'], $_POST['inputAporte'])) {
        return false;
    }

    require_once './db.php';
    return insert($name, $cuota, $aporte);
}
if (isset($_POST['btnSubmit'])) {
    insertData();
    header("Location: index.php");
}
