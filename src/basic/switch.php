<?php

// Ejemplo de switch, salen errores, pero tambien imprime la solución

$optionText = '';
$optionId = 4;

switch($optionId){
  case (1):
    $optionText = "Leer menú";
    break;
  case (2):
    $optionText = "Editar menú";
    break;
  case (3):
    $optionText = "Eliminar menú";
    break;
  default:
    $optionText = "Opción no disponible";
    break;
}

echo $optionText;

// sintaxis alternativa, todo a la izquierda para que no de error 

/* <?php $i = 0; ?>
<?php switch ($i):  ?>
<?php case 0: ?>
<h1>hola</h1>
<?php break; ?>
<?php endswitch; ?> */