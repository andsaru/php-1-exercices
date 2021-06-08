<?php

declare(strict_types=1);

// Ejercicio SumArrayTest Opción 1

// function sumArray(array $array): int {

//     $sum = 0;

//     for($index = 0; $index < sizeof($array); $index++){
//         $sum += $array[$index];
//     }

//     return $sum;
// }

// Ejercicio SumArrayTest Opción 2

// function sumArray(array $array): int {
//     $sum = 0;

//     foreach ($array as $element) {        
//         $sum += $element;
//     }
//     // global $sum
// }

// Ejercicio SumArrayTest Opción 3 CON array_sum

function sumArray(array $numbers): int {
    return array_sum($numbers);
}

// Ejercicio SumArrayTest Opción 4 CON array_reduce (array anonimo, callback)

// function sumArray(array $numbers): int {
//     return array_reduce($numbers, function ($carry, $number) {
//         return $carry + $number;
//     });
// }

// -----------------------------------

// Ejercicio FindMaxTest Opción 1

// function findMax(array $numbers): int {
//     $max = $numbers[0];

//     for ($index = 0; $index <= count($numbers) - 1 ; $index++) {
//         if ($numbers[$index] > $max) {
//             $max = $numbers[$index];
//         }
//     }
//     return $max;
// }

// Ejercicio FindMaxTest Opción 2 con MAX

function findMax(array $numbers): int {
    return max($numbers);
}

// Ejercicio FindMaxTest Opción 3 con ternario

// function findMax(array $numbers): int {
//     $max = $numbers[0];

//     foreach ($numbers as $number) {
//         $max = $max < $number ? $number : $max;
//     }

//     return $max;
// }

// ----------------------------------

// Ejercicio AgeAverageTest Opción 1

// function averageAge(array $people) { // aqui mejor no devolvemos el tipo de dato porque puede ser decimal 
//     $sum = 0;

//     foreach ($people as $person) {
//         $sum += $person['age'];
//     }
//     $average = $sum / count($people);
//     return (float) $average;
// }

// Ejercicio AgeAverageTest Opción 2 con Array_sum y array_column
// array_column coge los datos de la columna 'age'

function averageAge(array $people) {
    return array_sum(array_column($people, 'age'))/count($people);
}

// -----------------------------------

// Ejercicio ReverseTest Opción 1
function reverseString(string $string): string { // $string = Hola qué tal
    $chars = mb_str_split($string); // función multibyte que separa la cadena en caracter
                                    // $chars = ['H', 'o', 'l', 'a', ' ', 'q', 'u', 'é', ' ', 't', 'a', 'l']
                                    // y luego lo vuelve a juntar dandole la vuelta
    return implode('', array_reverse($chars));
}

// function reverseWords($sentence) {
//     $words = explode(" ", $sentence);
//     $reverseWords = array_reverse($words);
//     $reverseString = implode(" ", $reverseWords);
//     return $reverseString;
// }

// function reverseWords(string $sentence): string {
//   $stringReverse = "";
//   $sentence = explode(" ", $sentence); // -> array ['hola', 'que', 'tal']
//   var_dump($sentence); // Depuramos
//   $sentence = array_reverse($sentence); // ->girar array ['tal', 'que', 'hola']
//   foreach($sentence as $word) { // recorre el array
//     $stringReverse .= ($word);
//   }
//   return $stringReverse;
// }

// Opción profesor 
function reverseWords (string $string): string {
    $words = explode(' ', $string);

    return implode(' ', array_reverse($words));
}

function reverseCharactersInWords(string $string):string {
    $words = explode(' ', $string);

    $turnWords = [];

    foreach($words as $word) {
        $turnWords [] = reverseString($word); // utilizo la función primera, que ya gira las palabras
    }

    return implode(' ', $turnWords);
}

// -----------------------------------