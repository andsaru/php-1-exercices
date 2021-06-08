<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include("./link.php") // include para añadir el enlace que está en link.php
    ?>

    <?php $weekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>

    <?php
       // var_dump($_GET); // para verlo solo por pantalla
    ?>

    <!-- <pre>
        &_GET: <?php var_dump($_GET); ?>
        <br/>
        &_POST: <?php //print_r($_POST); ?>
        <br/>
        &_SERVER: <?php //print_r($_SERVER; ?>
        <br/>
    </pre> -->

    <h1>Hola, <?= $_GET['token']; ?></h1>
    <p>Hoy es <strong><?= $weekDays[date('N')]; ?></strong> ,¿Qué tal estás?</p>
</body>
</html>