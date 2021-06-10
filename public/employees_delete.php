<?php

require $_SERVER['DOCUMENT_ROOT']. '/lib/app.php';
// es la forma de coger (file_get_contents) una solicitud php del cuerpo ('php://input') y la presenta 
$body = file_get_contents('php://input');
// el cuerpo que le llega es una cadena, y asi la transforma en un objeto json con json_decode
$person = json_decode($body, true);

$query = 'DELETE FROM employees WHERE id = :identificador';

$stm = $dbConnexion->prepare($query);
$stm->bindParam(':identificador', $person['id']);
$stm->execute(); 

$result = $stm->rowCount();

$response = [
    'status' => $result === 0 ? 'error' : 'success',
    'message' => $result === 0 ? 'No hemos eliminado a nadie' : 'He eliminado '.$result.' fila',
];


echo json_encode($response);

exit();