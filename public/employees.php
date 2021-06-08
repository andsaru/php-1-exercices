<?php
// Conexión a la base de datos de mysql
$dbUser = 'root';
$dbPassword = 'Andres2021';
$dbHost = 'localhost';
$dbDatabase = 'employees';

try {
    $dbConnexion = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
    // Cojo el atributo de PDO::ATTR_ERRMODE y elijo el valor PDO::ERRMODE_EXCEPTION
    // que esta dentro de PDO::ATTR_ERRMODE
    $dbConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // catch es una estructura de control de flujo, que siempre recibe una excepción
} catch (PDOException $e) {
    echo 'Error en la conexión a la base de datos: ' . $e->getMessage();
}

var_dump($dbConnexion);

?>
<?php

$people = [
    ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
    ['name' => 'Mari Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
    ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
    ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
];

?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';



