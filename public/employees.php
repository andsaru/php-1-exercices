<?php 

    require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php'; 
    // Quiero evaluar si me llega el id por el query a través de URL, con el metodo isset
    // Si me llega el id, monto una consulta que incluye ese criterio
    // Y sino saca la entera de empleados
    //$query= (isset($_GET['id'])) ? 'SELECT * FROM employees WHERE id='.$_GET['id'] : 'SELECT * FROM employees';

    $query = 'SELECT * FROM employees';
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id='.$_GET['id'];
    }elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email= "'.$_GET['email'].'"';
    }

    // Hago una consulta a la base de datos para que me devuelva todo
    $stm = $dbConnexion->query($query);
    // Devuelve un array que contiene todas las filas del conjunto de resultados fetchAll
    $people = $stm->fetchAll(PDO::FETCH_ASSOC);

?>
 <?php
//  Tras realizar $people = $stm->fetchAll(PDO::FETCH_ASSOC);, 
//  Toda la tabla de abajo ya no nos hace falta 

//  people = [
//     ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
//     ['name' => 'Mari Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
//     ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
//     ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
// ];  
?>

<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';



