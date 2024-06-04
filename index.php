<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <?php
    require_once './db.php';
    require_once './data.php';
    ?>
</head>

<body>
    <form action="./data.php" method="POST">
        <span>
            <p>Deudor:</p>
            <input type="text" name="inputName">
        </span>
        <span>
            <p>Numero Cuota:</p>
            <input type="text" name="inputCuota">
        </span>
        <span>
            <p>Aporte:</p>
            <input type="number" name="inputAporte">
        </span>
        <button name="btnSubmit">Agregar</button>
    </form>

    <table>
        <thead>
            <th>ID</th>
            <th>Deudor</th>
            <th>N° Couta</th>
            <th>Aporte</th>
            <th>Fecha de Pago</th>
        </thead>
        <tbody>
            <?php
            $data = getData();
            foreach ($data as $row) {
                echo '<tr>'
                    . '<td>', $row->id . '</tf>'
                    . '<td>', $row->deudor . '</tf>'
                    . '<td>', $row->cuota . '</tf>'
                    . '<td>', $row->couta_capital . '</tf>'
                    . '<td>', $row->fecha_pago . '</tf>'
                    . '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>