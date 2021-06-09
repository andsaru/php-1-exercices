
<?php

var_dump($_POST);
var_dump($_FILES);

require $_SERVER['DOCUMENT_ROOT']. '/lib/app.php';

$query = 'INSERT INTO `employees` (`name`, `email`, `age`, `city`) 
          VALUES (:nombre, :correo, :edad, :ciudad);';

// Sintaxis alternativa para añadir parámetros
// $params = [
//     ':nombre' => $_POST['name'],
//     ':correo' => $_POST['email'],
//     ':edad' => $_POST['age'],
//     ':ciudad' => $_POST['city'],
// ];

$stm = $dbConnexion->prepare($query);

$stm->bindParam(':nombre', $_POST['name']);
$stm->bindParam(':correo', $_POST['email']);
$stm->bindParam(':edad', $_POST['age']);
$stm->bindParam(':ciudad', $_POST['city']);

$stm->execute(); 

// $stm->execute($params); Si usamos la sintaxis alternativa para añadir parámetros

header('Location: /employees.php?message=' . urlencode('El usuario '.$_POST['email'].' se ha añadido correctamente.'));