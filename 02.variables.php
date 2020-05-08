<?php

#Variable numerica
$numero = 5;
echo "Esto es una variable numero: $numero <br>";
#metodo var_dump() me muestra que tipo de variable estoy usando y sirve para identificar errores de las variables que estamos llamando
var_dump($numero);
#tambuen se puede crear el salto de linea asi:
echo "<br><br>";

#Variable texto
$palabra = "Palabra";
echo "Esto es una variable texto: $palabra <br>";
#metodo var_dump() me muestra que tipo de variable estoy usando y sirve para identificar errores de las variables que estamos llamando
var_dump($palabra);
#tambuen se puede crear el salto de linea asi:
echo "<br><br>";
#O tambien utilizando las etiquetas de titulo o parrafo de html <p><h1,2,3,4,5,6>

#Variable boleana
$boleana1 = true;
$boleana = false;
echo "Esto es una variable boleana true: $boleana1 cuando son true muestra 1. <br>";
#metodo var_dump() me muestra que tipo de variable estoy usando y sirve para identificar errores de las variables que estamos llamando
var_dump($boleana1);
#tambien se puede crear el salto de linea asi:
echo "<br><br>";
echo "Esto es una variable boleana false: $boleana cuando son false muestra vacio. <br>";
var_dump($boleana);
#tambien se puede crear el salto de linea asi:
echo "<br><br>";

#Variable arreglo
$colores = array("Rojo", "Amarillo");
echo "Esto es una variable arreglo: $colores[0] <br>";
#metodo var_dump() me muestra que tipo de variable estoy usando y sirve para identificar errores de las variables que estamos llamando
var_dump($colores);
#tambuen se puede crear el salto de linea asi:
echo "<br><br>";

#Variable arreglo con propiedades
$verduras = array("Verdura1" => "Lechuga", "Verdura2" => "Cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[Verdura1] <br>";
#metodo var_dump() me muestra que tipo de variable estoy usando y sirve para identificar errores de las variables que estamos llamando
var_dump($verduras);
#tambuen se puede crear el salto de linea asi:
echo "<br><br>";

#Variable objeto
$frutas = (object)["fruta1" => "Manzana", "fruta2" => "Pera"];
echo "Esto es una variable objeto: $frutas->fruta2 <br>";
#metodo var_dump() me muestra que tipo de variable estoy usando y sirve para identificar errores de las variables que estamos llamando
var_dump($frutas);
#tambuen se puede crear el salto de linea asi:
echo "<br><br>";

?>