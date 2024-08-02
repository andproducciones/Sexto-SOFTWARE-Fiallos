<?php 
/*
  a. Declaración de Variables:
  - Define al menos cinco variables de diferentes tipos de datos (integer, float, string, boolean, array).
  - Asigna valores a estas variables.
*/

$entero     = 1;
$entero2    = 5;
$entero3    = 6;
$decimal    = 3.14;
$cadena     = "Francis Fiallos";
$boleano    = true;
$array      = array(1,2,3,4,5);


/*
  b. Operaciones Aritméticas:
  - Realiza al menos dos operaciones aritméticas con las variables numéricas que has creado. Muestra el resultado usando la función `echo`.
*/

$resultado = $entero3 * $decimal;

echo "Resultado de la primera opercion: ".$resultado."<br><br>";

$resultado2 = $decimal / $entero2;

echo "Resultado de la segunda opercion: ".$resultado2;

/*
  c. Manipulación de Cadenas:
  - Crea una variable de tipo cadena y realiza las siguientes acciones:
   - Concatenación de dos cadenas.
   - Obtén la longitud de la cadena.
*/

$cadena2 = "Dice 'Hola Mundo'";
$cadena3 = $cadena." ".$cadena2;
echo "<br><br>Cadena concatenada: ".$cadena3;


/*
  d. Uso de Condicionales:
  - Crea una estructura de control condicional que verifique el valor de una variable booleana y muestre un mensaje diferente según sea `true` o `false`.
*/
if ($boleano) {
  echo "<br><br>El valor de la variable boleana es: Verdadero";
} else {
  echo "<br><br>El valor de la variable boleana es: Falso";
}

/*
   e. Creación de un Array:
  - Define un arreglo con al menos cinco elementos.
  - Muestra un elemento específico del arreglo utilizando su índice.
*/
$clave = 2;
$array2 = array("Manzana", "Banana", "Naranja", "Uva", "Kiwi");

echo "<br><br>Elemento del array con clave ".$clave." es. : ".$array2[$clave];

?>