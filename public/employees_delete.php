<?php
// es la forma de coger (file_get_contents) una solicitud php del cuerpo ('php://input') y la presenta 
$body = file_get_contents('php://input');
// el cuerpo que le llega es una cadena, y asi la transforma en un objeto json con json_decode
$person = json_decode($body, true);

echo json_encode($person);

exit();