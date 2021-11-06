<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */

/** APELLIDO: Dinamarca 
 * NOMBRE: Mirko
 * LEGAJO: FAI-2413 
 * CARRERA:TUDW 
 * CORREO: dinamarcamirko.19@gmail.com
 * GITHUB: MirkoDinamarca
*/

/** APELLIDO:Claure 
 * NOMBRE:Alejandro, Santos 
 * LEGAJO: FAI-2833 
 * CARRERA:TUDW 
 * CORREO: alejandro.claure@est.fi.uncoma.edu.ar 
 * GITHUB:aleClau1
*/

/** APELLIDO:Luna 
 * NOMBRE:Laureano Iván
 * LEGAJO: FAI-3543
 * CARRERA:TUDW 
 * CORREO: laureano.luna@fi.uncoma.edu.ar 
 * GITHUB:LaureanoLuna
*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Explicación 3 - Consigna (1)
 * Inicializa una estructura de datos que almacena 10 ejemplos de juegos, retorna la colección de juegos
 * @param
 * @return
 */

function cargarJuegos()
{
    $coleccionJuegos[0] = ["jugadorCruz" => "mirko", "jugadorCirculo" => "sergio", "puntosCruz" => 3, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz" => "mirko", "jugadorCirculo" => "sergio", "puntosCruz" => 0, "puntosCirculo" => 4];
    $coleccionJuegos[2] = ["jugadorCruz" => "mauricio", "jugadorCirculo" => "laura", "puntosCruz" =>  5, "puntosCirculo" => 0];
    $coleccionJuegos[3] = ["jugadorCruz" => "mauricio", "jugadorCirculo" => "laura", "puntosCruz" =>  1, "puntosCirculo" => 1];
    $coleccionJuegos[4] = ["jugadorCruz" => "clara", "jugadorCirculo" => "sofia", "puntosCruz" =>  3, "puntosCirculo" => 0];
    $coleccionJuegos[5] = ["jugadorCruz" => "mirko", "jugadorCirculo" => "sergio", "puntosCruz" =>  5, "puntosCirculo" => 0];
    $coleccionJuegos[6] = ["jugadorCruz" => "sebastian", "jugadorCirculo" => "carlos", "puntosCruz" =>  1, "puntosCirculo" => 1];
    $coleccionJuegos[7] = ["jugadorCruz" => "debora", "jugadorCirculo" => "gustavo", "puntosCruz" =>  0, "puntosCirculo" => 4];
    $coleccionJuegos[8] = ["jugadorCruz" => "agustin", "jugadorCirculo" => "damian", "puntosCruz" =>  1, "puntosCirculo" => 1];
    $coleccionJuegos[9] = ["jugadorCruz" => "agustin", "jugadorCirculo" => "damian", "puntosCruz" =>  0, "puntosCirculo" => 5];

    return $coleccionJuegos;
}

/**
 * Explicación 3 - Consigna (2)
 * Muestra el menú de opciones cuando se invoque a la función
 * @param
 * @return
 */

function seleccionarOpcion() {
    do{
    echo "\n";
    echo "Menú de Opciones\n";
    echo "\n";
    echo "¿Qué desea hacer?\n";
    echo "1) Jugar al tateti\n";
    echo "2) Mostrar un juego\n";
    echo "3) Mostrar el primer juego ganador\n";
    echo "4) Mostrar porcentaje de juegos ganados\n";
    echo "5) Mostrar resumen del Jugador\n";
    echo "6) Mostrar listado de juegos ordenador por Jugador O\n";
    echo "7) Salir\n";
    echo "Ingrese una opción: ";
    $opcionUsuario = trim(fgets(STDIN)); 
    if ($opcionUsuario > 0 && $opcionUsuario < 8){
        $correcto = true;
    }else {
        $correcto = false;
    }
}while ($correcto == false);

return $opcionUsuario;
}

/**
 * Explicacion 3 - Consigna(3)
 * 
 * 
 */
/**3. Implementar una función que solicite al usuario un número entre un rango de valores. Si el número
ingresado por el usuario no es válido, la función se encarga de volver a pedirlo. La función retorna un
número válido. LISTO. */

function reutilizar(){
    do{
        $invalido = false;
    echo "ingrese dos valores para ingresar un número entre esos valores";
    $entre1= trim(fgets(STDIN));
    $entre2= trim(fgets(STDIN));
    if(solicitarNumeroEntre($entre1, $entre2)){
        $invalido = false;
        
    }else{
        echo "ingrese un número válido";
        $onvalido = true;
    }
    }while($invalido);
}


/**
 * Según el número que ingrese el usuario en la opción 2 del menú, se muestra por pantalla el juego seleccionado.
 * Explicacion 3 - Consigna(4)
 * @param array $prueba (¿Es un array?)
 * @param int $nro
 * @return string
 */
/*4. Implementar una función que dado un juego, muestre en pantalla los datos del juego como lo indica la
sección EXPLICACIÓN 1.*/

function mostrarJuego($prueba, $nro) {
    for ($i=0; $i < count($prueba); $i++) { 
        if ($i == $nro) {
            // Si es un empate..
            if ($prueba[$i]["puntosCruz"] == $prueba[$i]["puntosCirculo"]) {
                echo "*********************************\n";
                echo "Juego TATETI: " . $i . " (empate)\n";
                echo "Jugador X: " . $prueba[$i]["jugadorCruz"] . " obtuvo " . $prueba[$i]["puntosCruz"] . " puntos\n";
                echo "Jugador O: " . $prueba[$i]["jugadorCirculo"] . " obtuvo " . $prueba[$i]["puntosCirculo"] . " puntos\n";
                echo "*********************************\n";
            } else if ($prueba[$i]["puntosCruz"] > $prueba[$i]["puntosCirculo"]) { // Si el jugador X gana el juego, entonces..
                echo "*********************************\n";
                echo "Juego TATETI: " . $i . " (ganó X)\n";
                echo "Jugador X: " . $prueba[$i]["jugadorCruz"] . " obtuvo " . $prueba[$i]["puntosCruz"] . " puntos\n";
                echo "Jugador O: " . $prueba[$i]["jugadorCirculo"] . " obtuvo " . $prueba[$i]["puntosCirculo"] . " puntos\n";
                echo "*********************************\n";
            } else if ($prueba[$i]["puntosCruz"] < $prueba[$i]["puntosCirculo"]) { // Si el jugador O gana el juego, entonces..
                echo "*********************************\n";
                echo "Juego TATETI: " . $i . " (ganó O)\n";
                echo "Jugador X: " . $prueba[$i]["jugadorCruz"] . " obtuvo " . $prueba[$i]["puntosCruz"] . " puntos\n";
                echo "Jugador O: " . $prueba[$i]["jugadorCirculo"] . " obtuvo " . $prueba[$i]["puntosCirculo"] . " puntos\n";
                echo "*********************************\n";
            }
            $x = 1;
            $i = count($prueba);
        } else {
            $x = 0;
        }
    }
    if ($x == 0){
        echo "El Juego ingresado no existe, vuelva a ingresar el número\n";
    }
}

/**
 * Agrega un juego nuevo a la colección de juegos
 * @param int $digit
 * @param array $arrayTateti
 */
/*5. Implementar una función agregarJuego cuya entrada en la colección de juegos y un juego, y la función
retorna la colección modificada al agregarse el nuevo juego.*/

function agregarJuego($digit, $arrayTateti) {
    $juegosCargados[$digit] = $arrayTateti;
    print_r($juegosCargados);
}

/*6. Implementar una función que dada una colección de juegos y el nombre de un jugador, retorne el índice
del primer juego ganado por dicho jugador. Si el jugador no ganó ningún juego, la función debe retornar
el valor -1*/


/*7. Implementar una función que dada la colección de juegos y el nombre de un jugador, retorne el resumen
del jugador utilizando la estructura b) de la sección EXPLICACACIÓN 2.*/


/*8. Implementar una función sin parámetros formales que solicite al usuario un símbolo X o O, y retorne el
símbolo elegido. La función debe validar el datos ingresado por el usuario (Utilice funciones predefinidas
de string).*/


/*9. Implementar una función que dada una colección de juegos retorne la cantidad de juegos ganados (sin
importar si es X o O, es decir, algun jugador debe haber ganado, no debe haber empate.)*/


/*10. Implementar una función que dada una colección de juegos y un símbolo (X o O) retorne la cantidad de
juegos ganados por el símbolo ingresado por parámetro.*/


/*11. Implementar una función sin retorno que, dada una colección de juegos, muestre la colección de juegos
ordenado por el nombre del jugador cuyo símbolo es O.*/
/*12. Implementación del Programa Principal. Deberá seguir los siguientes pasos:
a. Precargar las estructuras de juegos.
b. Repetir el menú de opciones mientras la opción seleccionada no sea la opción Salir.
c. Cuando el usuario selecciona la opción del menú, debe invocar a la/s función/es necesarias.
Salvo algunas excepciones, debe contar con funciones con parámetros formales y retorno.
Asesorarse con la Cátedra para implementar las funciones correctamente de modo que los
resultados de las funciones puedan ser reusado.
d. Investigar la instrucción switch en el manual de PHP. ¿a qué tipo de estructura de control vista
en teoría corresponde? Escriba un comentario sobre la instrucción en el código fuente.*/

/*13. En el desarrollo utilizar funciones predefinida por PHP (strtolower, strtoupper, strlen, etc.). En la defensa
se le preguntará que funciones predefinidas utilizaron, qué hacen dichas funciones y para qué las
utilizaron.*/



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$digito = 9;

//Proceso:
do {
    $opciones = seleccionarOpcion(); // Menú de Opciones
    $juegosCargados = cargarJuegos(); // Carga la colección de juegos
    $nroJuegos = count($juegosCargados);
    switch ($opciones) {
        case 1:
            // Comienza el juego del Tateti
            // HECHO
            $tateti = jugar();
            print_r($tateti);
            imprimirResultado($tateti);
            $digito++;
            $almacenando = agregarJuego($digito, $tateti);
            break;
        case 2: 
            // Muestra por pantalla datos de la colección de juegos
            // HECHO
            do {
                echo "Ingrese el número del juego que quiera ver: ";
                $numJuego = trim(fgets(STDIN));
                $mostrandoJuego = mostrarJuego($juegosCargados, $numJuego);
                echo "¿Desea ingresar otro número?s(si)/n(no): ";
                $respuestaUsuario = trim(fgets(STDIN));
            } while ($respuestaUsuario == "s");
            break;
        case 3:
            // Se le solicita al usuario el nombre del jugador y muestra por pantalla el número con la primer victoria de el/ella
            echo "Ingrese el nombre del jugador para mostrar sus datos: ";
            $nombreJugador = trim(fgets(STDIN));
            break;
        case 4:
            echo "7) Salir\n";
            break;
        case 5:
            echo "5) Mostrar resumen del Jugador\n";

            break;
        case 6:
            echo "6) Mostrar listado de juegos ordenador por Jugador O\n";
            break;

            //...
        case 7:
            $opcion = 8;
            break;
    }
} while ($opciones != 7);










