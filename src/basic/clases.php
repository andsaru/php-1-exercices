<?php

// class Archer {
//   private string $name;
//   private int $attack;
//   private int $shield;
//   private int $lifePoints;

//   public function __construct(string $name) {
//     $this->name = $name;
//     $this->attack = 5;
//     $this->shield = 1;
//     $this->lifePoints = 13;
//   }

//   public function getName(): string {
//     return $this->name;
//   }

//   public static function attack($enemy): void {
//     echo 'Ataco a '.($enemy).PHP_EOL;
//   }

//   public function healSelf($healPoints) {
//     $this->lifePoints += $healPoints;
//   }
// }

// $arquero1 = new Archer('Legolas');
// $arquero2 = new Archer('Robin Hood');
// echo $arquero1->getName().PHP_EOL;
// echo $arquero1->name.PHP_EOL;
// var_dump($arquero1 instanceof Archer);
// var_dump($arquero2 instanceof Archer);

// Archer();

// echo Archer::attack('Pedro');

// $arquero2->attack('Manolo');

declare (strict_types=1);

class Contacto {
  public $name;
  public $telefono;
  private $estado = 1;

  public function __construct(string $name, string $phone)
  {
    // $this solo esta disponible si creo primero el objeto
    $this->name = $name;
    $this->telefono = $phone;
    // echo 'Creando objeto'.PHP_EOL;
  }

  private function metodoPrivado() {

  }

  // public static function imprimeAlgo() {
  //   echo 'hola'.PHP_EOL;
  // }

}

class ContactoNokia extends Contacto {
  public function sobreEscribirTelefono()
  {
    $this->telefono = '';
  }
}

$contactoLuis = new Contacto('Luis', '6001');
$contactoJoseIgnacio = new Contacto('Jose Ignacio', '6002');

var_dump($contactoLuis);
var_dump($contactoJoseIgnacio);
// contacto::imprimeAlgo(); // Esta definido como public static, no hace falta inicializar la clase del objeto