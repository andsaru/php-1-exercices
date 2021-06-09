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

// Cerramos la conexión
// $dbConnexion = null;

