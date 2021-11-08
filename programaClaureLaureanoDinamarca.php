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

function seleccionarOpcion()
{
    do {
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
        if ($opcionUsuario > 0 && $opcionUsuario < 8) {
            $correcto = true;
        } else {
            $correcto = false;
        }
    } while ($correcto == false);

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

function reutilizar()
{
    do {
        $invalido = false;
        echo "ingrese dos valores para ingresar un número entre esos valores";
        $entre1 = trim(fgets(STDIN));
        $entre2 = trim(fgets(STDIN));
        if (solicitarNumeroEntre($entre1, $entre2)) {
            $invalido = false;
        } else {
            echo "ingrese un número válido";
            $invalido = true;
        }
    } while ($invalido);
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

function mostrarJuego($prueba, $nro)
{
    for ($i = 0; $i < count($prueba); $i++) {
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
    if ($x == 0) {
        echo "El Juego ingresado no existe, vuelva a ingresar el número\n";
    }
}

/**
 * Explicación 3 - Inciso(5)
 * Teniendo ya una colección de juegos, y ya haber jugado uno, la función debe mostrar
 * la colección modificada con el juego ya agregado.
 * @param array $coleccion, $juegoNuevo
 * @return array
 */

function agregarJuego($coleccion, $juegoNuevo)
{
    $cantidad = count($coleccion);

    for ($i = $cantidad; $i <= $cantidad; $i++) {
        $coleccion[$i] = $juegoNuevo;
    }

    return $coleccion;
}

/**
 * Explicación 3 - Inciso(6)
 * A partir de una colección de juegos y el nombre del jugador,
 * retorna el índice del primer juego ganado por ese jugador. Si
 * el jugador no ganó ningún juego, retorna -1.
 */

function primerJuegoGanado($coleccion, $nomb)
{
    $cant = count($coleccion);
    $gano = true;

    $i = 0;

    while ($gano && $i < $cant) {
        if ($coleccion[$i]["jugadorCruz"] == $nomb && $coleccion[$i]["puntosCruz"] > $coleccion[$i]["puntosCirculo"]) {
            $gano = false;

            $respuesta = $i;
        } else if ($coleccion[$i]["jugadorCirculo"] == $nomb && $coleccion[$i]["puntosCirculo"] > $coleccion[$i]["puntosCruz"]) {
            $gano = false;

            $respuesta = $i;
        } else {
            $respuesta = -1;
        }
        $i++;
    }
    return $respuesta;
}


/*7. Implementar una función que dada la colección de juegos y el nombre de un jugador, retorne el resumen
del jugador utilizando la estructura b) de la sección EXPLICACACIÓN 2.*/
function resumenJugador($arrayColeccionJuegos, $nombreJugador)
{

    $juegosGanados = 0;
    $juegosPerdidos = 0;
    $juegosEmpatados = 0;
    $puntosTotales = 0;
    $i = 0;
    $cuenta = count($arrayColeccionJuegos);
    $indiceganador = primerJuegoGanado($arrayColeccionJuegos, $nombreJugador);
    if ($indiceganador > -1) {
        $jugadorX = $arrayColeccionJuegos[$indiceganador]["jugadorCruz"];
        $jugadorO = $arrayColeccionJuegos[$indiceganador]["jugadorCirculo"];
        $puntosX = $arrayColeccionJuegos[$indiceganador]["puntosCruz"];
        $puntosO = $arrayColeccionJuegos[$indiceganador]["puntosCirculo"];

        if ($nombreJugador == $jugadorX) {

            for ($i = 0; $i < $cuenta; $i++) {
                //while($i< $cuenta){
                //if ($nombreJugador == $jugadorX && $puntosX > $puntosO ) {
                if ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX > $puntosO) {
                    $juegosGanados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                } elseif ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX < $puntosO) {
                    $juegosPerdidos++;
                } elseif ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX == $puntosO) {
                    $juegosEmpatados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                    // }

                }
            }
        } elseif ($nombreJugador == $jugadorO) {
            for ($i = 0; $i <= $cuenta; $i++) {
                if ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX < $puntosO) {
                    $juegosGanados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                } elseif ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX > $puntosO) {
                    $juegosPerdidos++;
                } elseif ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX == $puntosO) {
                    $juegosEmpatados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                }
            }
        }
    }
    $resumen = [
        "nombreJugador" => $nombreJugador,
        "juegosGanados" => $juegosGanados,
        "juegosPerdidos" => $juegosPerdidos,
        "juegosEmpatados" => $juegosEmpatados,
        "puntosTotales" => $puntosTotales
    ];
    return $resumen;
}



/**
 * Explicación 3 - Inciso(8)
 * Le solicita al usuario un símnolo X u O, y retorna el símbolo
 * elegido, la función tiene que validar el dato ingresado por el usuario.
 * @return string
 */

function simboloXoY()
{
    do {
        echo "Elija el símbolo a jugar (X  / O): ";
        $simbolo = strtoupper(trim(fgets(STDIN)));
        $prueba = "test";

        if ($simbolo == "X" || $simbolo == "O") {
            $prueba = $simbolo;
        } else {
            echo "Ingrese un símbolo válido\n";
        }
    } while ($simbolo != $prueba);
    return $simbolo;
}


/**
 * Explicación 3 - Inciso(9)
 * De una colección de juegos, retorna la cantidad de juegos ganados
 * sin contar los empates, tampoco importa si es X u O.
 * @param array $juegos
 * @return int
 */

function juegosGanados($juegos)
{
    //int $cant, $ganados, $i 
    $cant = count($juegos);
    $ganados = 0;

    for ($i = 0; $i < $cant; $i++) {
        if ($juegos[$i]["puntosCruz"] > 1 || $juegos[$i]["puntosCirculo"] > 1) {
            $ganados++;
        }
    }
    return $ganados;
}


/**
 * Explicación 3 - Inciso(10)
 * Dado una colección de juegos más el símbolo, retorne la cantidad de juegos ganado por ese símbolo
 * @param array $arrayTateti
 * @return int 
 */

function ganadosPorSimbolo($arrayTateti, $simbolo)
{
    $cant = count($arrayTateti);
    $ganadas = 0;

    for ($i = 0; $i < $cant; $i++) {

        if ($simbolo == "X" && $arrayTateti[$i]["puntosCruz"] > $arrayTateti[$i]["puntosCirculo"]) {
            $ganadas++;
        } else if ($simbolo == "O" && $arrayTateti[$i]["puntosCirculo"] > $arrayTateti[$i]["puntosCruz"]) {
            $ganadas++;
        }
    }
    return $ganadas;
}

/*11. Implementar una función sin retorno que, dada una colección de juegos, muestre la colección de juegos
ordenado por el nombre del jugador cuyo símbolo es O.*/
function coleccionJuegosO($coleccionJuegos)
{
}

/*12. Implementación del Programa Principal. Deberá seguir los siguientes pasos:
a. Precargar las estructuras de juegos. LISTO
b. Repetir el menú de opciones mientras la opción seleccionada no sea la opción Salir. LISTO
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
$juegosCargados = cargarJuegos(); // Carga la colección de juegos

do {
    $opciones = seleccionarOpcion(); // Menú de Opciones

    $nroJuegos = count($juegosCargados);
    /**Se utiliza un switch (que es una estrucutra de control alternativa) para definir que hacer 
     * en cada caso según el valor ingresado por el usuario */
    switch ($opciones) {
        case 1:
            // Comienza el juego del Tateti
            // HECHO
            $tateti = jugar();
            print_r($tateti);
            imprimirResultado($tateti);
            $juegosCargados = agregarJuego($juegosCargados, $tateti);
            break;
        case 2:
            // Muestra por pantalla datos de la colección de juegos
            // HECHO
            do {
                echo "Ingrese el número del juego que quiera ver: ";
                $numJuego = trim(fgets(STDIN));
                $mostrandoJuego = mostrarJuego($juegosCargados, $numJuego);
                echo "¿Desea ingresar otro número?(SI/NO): ";
                $respuestaUsuario = strtoupper(trim(fgets(STDIN)));
            } while ($respuestaUsuario == "SI");
            break;
        case 3:
            // Se le solicita al usuario el nombre del jugador y muestra por pantalla el número con la primer victoria de el/ella
            echo "Ingrese el nombre del jugador para mostrar sus datos: ";
            $nombreJugador = trim(fgets(STDIN));
            $juego = primerJuegoGanado($juegosCargados, $nombreJugador);
            if ($juego == -1) {
                echo $nombreJugador . " no ganó ningún juego.";
            } else {
                $ganadorX = $juegosCargados[$juego]["jugadorCruz"];
                $puntosX = $juegosCargados[$juego]["puntosCruz"];

                $ganadorO = $juegosCargados[$juego]["jugadorCirculo"];
                $puntosO = $juegosCargados[$juego]["puntosCirculo"];
                if ($puntosX > $puntosO) {
                    echo "****************************************************************************\n";
                    echo "Juego TATETI: " . $juego . " (ganó X)\n";
                    echo "Jugador X: " . strtoupper($ganadorX) . " obtuvo " . $puntosX . " puntos\n";
                    echo "Jugador O: " . strtoupper($ganadorO) . " obtuvo " . $puntosO . " puntos\n";
                    echo "****************************************************************************\n";
                } elseif ($puntosX < $puntosO) {
                    echo "****************************************************************************\n";
                    echo "Juego TATETI: " . $juego . " (ganó O)\n";
                    echo "Jugador O: " . strtoupper($ganadorO) . " obtuvo " . $puntosO . " puntos\n";
                    echo "Jugador X: " . strtoupper($ganadorX) . " obtuvo " . $puntosX . " puntos\n";
                    echo "****************************************************************************\n";
                }
            }
            break;
        case 4:
            echo "ingrese un nombre de jugador: \n";
            $jugador = trim(fgets(STDIN));
            $resumenJugador = resumenJugador($juegosCargados, $jugador);
            print_r($resumenJugador);


            break;
        case 5:
            echo "5) Mostrar resumen del Jugador\n";

            break;
        case 6:
            echo "6) Mostrar listado de juegos ordenador por Jugador O\n";
            break;

            //...
        case 7:
            echo "programa finalizado.";
            $opcion = 8;
            break;
    }
} while ($opciones != 7);
