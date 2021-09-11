
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homecenter</title>
</head>
<body>

<?php
        // Aqui se escribe el codigo en php
        echo "Hola Soy Cristian Toro Aprendiz Del Sena";
?>
<?php
        // La funcion echo (El texto debe estar entre comillas simples o dobles)
        
echo "Yo amo programar en PHP!";

?>


<?php
        // Declaraciones De PHP

echo "A";
echo "B";

?>

 <?php
       
        // Agregar texto en el marco general de HTML

echo "<strong>Este proyecto esta enfocado para la organizacion de Homecenter.</strong>";

?>

<?php

        // Comnetarios


    echo "<p>Hola Mundo!</p>";

    // Este es un Comentario

    echo "<p>Estoy aprendiendo PHP!</p>";
    echo "<p>Este es mi primer programa para homecenter!</p>";
?>


<?php

// Comentarios de varias lineas


    echo "<p>Hola Mundo!</p>";

    /* Este es un Comentario
    de varias lineas para
    la organizacion de homecenter
    */

    echo "<p>Estoy aprendiendo PHP!</p>";
    echo "<p>Este es mi primer programa para homecenter!</p>";
?>

<?php
        //Varaibles 

        $name = "Cristian Toro";
        $age = 17;
        echo $name;

        // La salida será "Cristia Toro"

?>

<?php
   // Las constantes son similares a las variables, excepto que no se pueden cambiar o dejar de definir una vez que se han definido.
   define("MSG", "Hola Homecenter!");
   echo MSG;

   // La salida sera "Hola Homecenter
?>

<?php
        // Tipos De Datos

        // Cadena PHP

        $string1 = "Hola Homecenter"; // Doble Comillas
        $string2 = "Hola a todos los integrantes"; // Doble Comillas

        // Numeros Enteros en PHP

        $int1 = 42; // Número Positivo
        $int2 = -42; // Número Negativo
?>

<?php
        // Php Flotante.

        $x = 42.168;

        // PHP Boolean. (Solo tiene 2 ipciones de verdadero o falso)

        $x = true . $x = false;

         // Listado de variables con diferentes tipos de datos

         $str = "10";
         $int = 20;
         $sum = $str * $int;
         echo ($sum);

         // La Salida seria 30

?>

<?php
        // Alance de una variable

        $name = "Sección de tecnologia";
        function getName() {
        
        }
        getName();
        // Error: No se pudó definir la variable; name

?>

<?php
        // Palabra clave global

        $name = "Cris";
        function getNames() {
         global $name;
         echo $name;
        }         
        getNames();

        // La Salida seria Cris
?>

<?php
        // Especificar una variable con otra Variable
        $a = "HolaBuenDia";
        $hello = "Buenas_Tardes!";
        echo $$a;
        // Salida "Buenas Tardes!
?>
<?php
        // Operadores Aritmeticos

        $num1 = 8;
        $num2 = 6;

        //Suma
        echo $num + $num2; //Salida 14
        // Resta
        echo $num1 - $num2; //Salida 2
        //Multiplicacion
        echo $num1 * $num2; // Salida 48
        //Division
        echo $num / $num2; // Salida 1.33333

?>
<?php
        // Modulos(El operador de módulo, representado por el signo%, devuelve el resto de la división del primer operando)
 $x = 14;
 $y = 3;
 echo $x % $y; //Salida 2
?>
<?php
        //Incremento y Decremento
$x++; // equivalente a $ x = $ x + 1
$x--; // equivalente a $ x = $ x-1;
$x++; // post-incremento
$x--; // post-decremento 
++$x; // pre-incremento 
--$x; // pre-decremento

$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3

?>

<?php
        // Asignacion de operadores
$num1 = 5;
$num2 = $num1;
        // Ejemplo de la asignación
        $x = 50;
        $x += 100;
        echo $x;

// La salida seria 150
?>
<?php
        // Matrices Numericas
$name1 = "Juan";
$name2 = "Villamil";
$name3 = "Rojas";
        // Aplicacion de la matriz
$names = array("Wendy, Esteban, Cortes");
        // Aplicacion de la matriz
$names[0] = "Cristian";
$names[1] = "Camilo";
$names[2] = "Gómez";
echo $names[1]; // Salida Camilo
?>

<?php
        // Matrices numericas
$myArray[0] = "Maria";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 21;

echo "$myArray[0] is $myArray[2] and knows 
$myArray[1]"

        // Salidas "Cristian tiene 17 y sabe PHP
?>

<?php
        // Matrices Asociativas

$people = array("Cristian"=>"17", "Wendy"=>"16", "Maria"=>"18");

// O

$people["Cristian"] = "17";
$people["Wendy"] = "21";
$people["Maria"] = "42";

echo $people["Cristian"]; // Salida 17

?>

<?php
        // MATRICES MULTIDIMENSIONALES
$people = array(
        'online'=>array('Cristian', 'Toro'),
        'offline'=>array('Wendy', 'Esteban', 'Cortes'),
        'away'=>array('Arthur', 'Daniel')
     );

     echo $people["online"][0]; // Salida "Cristian"
     echo $people["awy"][1]; // Salida "Daniel"
?>

<?php
        // Declaraciones condicionales
     $x = 10;
     $y = 20;
     if ($x >= $y) {
        echo $x;
    } else {
        echo $y;
    }

        // Salida "20"
?>

<?php
        // Declaracion de Elseif sirve para especificar una nueva condcion
    $age = 21;
    if ($age<=13) {
            echo "Usted es un Niño";
    }
elseif ($age>13 && $age<19) {
        echo "Usted es un joven";
}
    else {
            echo "Usted es un adulto";
    }

    // La salida seria adulto
?>

<?php
        // Los Bucles
        // El bucle While
$i =1;
while ($i < 7) {
        echo " El valor es $i<br/>";
        $i++;
}
        // El bucle do
        $t = 5;
        do {
                echo " el numero es " . $t . "<br/>";
                $i++;
        } while($i <= 7);

        /* La salida seria
        El numero es 5
        El numero es 6
        El numero es 7
        */

        // El bucle for(Cuando se sabe la limitacion del bucle)
for ($a= 0; $a < 6; $a++) {
        echo "Value of a : ". $a . "<br/>";
}
        // El bucle de foreach( funciona solo en matrices y se utiliza para recorrer cada par clave / valor en una matriz.)
$names = array("Cristian", "Camilo","Toro");
foreach ($naems as $name) {
        echo $name. "<br/>";
}

// La salida seria
// Cristian
// Camilo 
// Toro
?>

<?php
        // La Declaracion del Switch
switch ($today) {
 case "Mon":
        echo "Hoy es Lunes";
        break;
 case "Tue":
        echo "Hoy es Martes";
        break;
 case "Wed":
        echo "Hoy es Miercoles";
        break;
 case "Thu":
        echo "Hoy es Jueves";
        break;
 case "Fri":
        echo "Hoy es viernes";
        break;
 case "Sat":
        break;
        echo "Hoy es Sabado";
 case "Sun":
        echo "Hoy es Domingo";
 default:
        echo "Dua invalido";
}
        // La salida "Hoy es martes"

?>
<?php
        // Se utiliza la declaración predeterminada si no se encuentra ninguna coincidencia.
$x=5;
switch ($x) {
        case 1:
         echo "One";
         break;
        case 2:
         echo "Two";
         break;
        default:
         echo "No match";
}
?>
<?php
$day = "Wed";

switch ($day) {
 case "Mon":
        echo "El primer dia de la semana";
        break;
 case "Tue":
 case "Wed":
 case "thu":
        echo "Working day";
        break;
    default:
    echo "Weekend!";
}

// Salida "Wprking day
?>

<?php
        // La declaracion del descanso
$x=1;
switch ($x) {
        case 1:
                echo "One";
        case 2:
                echo "Two";
        case 3:
                echo "Three";
        default:
                echo "No Match";
}
?>

<?php
        // La declaracion de continuar
for ($i=0; $i<10; $i++) {
        if ($i%2==0){
                continue;
        }
        echo $i . "";

}

        // La salida seria 1 3 5 7 9
?>
<?php
        // Opcion incluir
        echo '<h1>Bienvenido a la organizacion de Homecenter</h1>';
        /*
        <html>
  <body>

  <?php include 'header.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>
        */
?>

<?php
        // Funciones en php
        function sayHello(){
                echo "Hola!";
        }
        sayHello(); // llamar la funcion

// la salida seria "Hola!"
?>

<?php
        //Parametros para una funcion
        function multiplyByTwo($number) {
        $answer = $number + 2;
        echo $answer;
        }
multiplyByTwo(3);

// la salida seria 6

        // Otro ejemplo

        function multiply($num1, $num2) {
        echo $num1 * $num2;
        }
multiply(3, 6);
// la salida seria 18 18
?>

<?php
        // Argumentos predeterminados
        function setCounter($num=10) {
                echo "Counter is ".$num;
                }
setCounter(42); //Counter es 42
setCounter(); //Counter es 10
?>

<?php
        // Regresp
        function mult($num1, $num2){
        $res = $num1 + $num2;
        return $res;
        }
echo mult(8, 3);
// La salida es 24
?>

<?php
        // Variables predefinidas  
        echo $_SERVER["ESCRIPT_NAME"];
        // Salida "/somefile.php"
?>

<?php
        // $ _SERVER Variables: Nombre de host
        // salida $ _SERVER ['HTTP_HOST'] devuelve el encabezado del Host de la solicitud actual.
        echo $_SERVER['HTTP_HOST'];
        //Outputs "localhost" 
?>
<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>
        
<?php
        // IMAGENES
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>

<?php
        // Formularios
        
?>
<form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>

Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; ?>

<?php
        //OBTENER
echo "Hi ".$_GET['name'].". ";
echo "You are ".$_GET['age']." years old.";
?>


</body>
</html>