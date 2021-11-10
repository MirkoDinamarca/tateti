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
 * @return array
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
 * @return int
 */

function seleccionarOpcion()
{
    // int $opcionUsuario
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
    $opcionUsuario = numeroValidado();
    return $opcionUsuario;
}

/**
 * Explicacion 3 - Consigna(3)
 * Solicita al usuario un número entre el rango de valores 1 y 7
 * @return $numeroValido
 */

function numeroValidado()
{
    // int $numeroValido
    echo "Ingrese una opción: ";
    $numeroValido = solicitarNumeroEntre(1, 7);
    return $numeroValido;
}

/**
 * Explicacion 3 - Consigna(4)
 * Según el número que ingrese el usuario en la opción 2 del menú, se muestra por pantalla el juego seleccionado.
 * @param array $juegos
 * @param int $nro
 * @return string
 */

function mostrarJuego($juegos, $nro)
{
    // int $i, $x
    for ($i = 0; $i < count($juegos); $i++) {
        if ($i == $nro) {
            // Si es un empate..
            if ($juegos[$i]["puntosCruz"] == $juegos[$i]["puntosCirculo"]) {
                echo "*********************************\n";
                echo "Juego TATETI: " . $i . " (empate)\n";
                echo "Jugador X: " . $juegos[$i]["jugadorCruz"] . " obtuvo " . $juegos[$i]["puntosCruz"] . " puntos\n";
                echo "Jugador O: " . $juegos[$i]["jugadorCirculo"] . " obtuvo " . $juegos[$i]["puntosCirculo"] . " puntos\n";
                echo "*********************************\n";
            } else if ($juegos[$i]["puntosCruz"] > $juegos[$i]["puntosCirculo"]) { // Si el jugador X gana el juego, entonces..
                echo "*********************************\n";
                echo "Juego TATETI: " . $i . " (ganó X)\n";
                echo "Jugador X: " . $juegos[$i]["jugadorCruz"] . " obtuvo " . $juegos[$i]["puntosCruz"] . " puntos\n";
                echo "Jugador O: " . $juegos[$i]["jugadorCirculo"] . " obtuvo " . $juegos[$i]["puntosCirculo"] . " puntos\n";
                echo "*********************************\n";
            } else if ($juegos[$i]["puntosCruz"] < $juegos[$i]["puntosCirculo"]) { // Si el jugador O gana el juego, entonces..
                echo "*********************************\n";
                echo "Juego TATETI: " . $i . " (ganó O)\n";
                echo "Jugador X: " . $juegos[$i]["jugadorCruz"] . " obtuvo " . $juegos[$i]["puntosCruz"] . " puntos\n";
                echo "Jugador O: " . $juegos[$i]["jugadorCirculo"] . " obtuvo " . $juegos[$i]["puntosCirculo"] . " puntos\n";
                echo "*********************************\n";
            }
            $x = 1;
            $i = count($juegos);
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
    // int $cantidad, $i, 
    // array $coleccion
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
 * @param array $coleccion
 * @param string $nomb
 * @return int
 */

function primerJuegoGanado($coleccion, $nomb)
{
    // int $cant, $i, $respuesta
    // boolean $gano
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

/**
 * Explicacion 3 - Inciso(7)
 * Dado una colección de juegos y el nombre del jugador, retorna un resumen del mismo
 * @param array $arrayColeccionJuegos
 * @param string $nombreJugador
 * @return array
 */

function resumenJugador($arrayColeccionJuegos, $nombreJugador)
{
    /*
    int $juegosGanados, $juegosPerdidos, $juegosEmpatados, $puntosTotales, $i
        $cuenta, $indiceGanador, $puntosO, $puntosX
    string $jugadorX, $jugadorO
    array $resumen
    */
    $juegosGanados = 0;
    $juegosPerdidos = 0;
    $juegosEmpatados = 0;
    $puntosTotales = 0;
    $i = 0;

    $cuenta = count($arrayColeccionJuegos);
    $indiceGanador = primerJuegoGanado($arrayColeccionJuegos, $nombreJugador);

    if ($indiceGanador > -1) {
        $jugadorX = $arrayColeccionJuegos[$indiceGanador]["jugadorCruz"];
        $jugadorO = $arrayColeccionJuegos[$indiceGanador]["jugadorCirculo"];

        if ($nombreJugador == $jugadorX) {

            for ($i = 0; $i < $cuenta; $i++) {
                $puntosX = $arrayColeccionJuegos[$i]["puntosCruz"];
                $puntosO = $arrayColeccionJuegos[$i]["puntosCirculo"];

                if ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX > $puntosO) {
                    $juegosGanados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                } elseif ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX < $puntosO) {
                    $juegosPerdidos++;
                } elseif ($arrayColeccionJuegos[$i]["jugadorCruz"] == $jugadorX && $puntosX == $puntosO) {
                    $juegosEmpatados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                }
            }
        } elseif ($nombreJugador == $jugadorO) {
            for ($i = 0; $i <= $cuenta; $i++) {
                $puntosX = $arrayColeccionJuegos[$i]["puntosCruz"];
                $puntosO = $arrayColeccionJuegos[$i]["puntosCirculo"];

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
    // string $simbolo, $aux
    do {
        echo "Elija el símbolo a jugar (X  / O): ";
        $simbolo = strtoupper(trim(fgets(STDIN)));
        $aux = "";

        if ($simbolo == "X" || $simbolo == "O") {
            $aux = $simbolo;
        } else {
            echo "Ingrese un símbolo válido\n";
        }
    } while ($simbolo != $aux);
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
    // int $cant, $ganados, $i 
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
 * @param string $simbolo
 * @return int 
 */

function ganadosPorSimbolo($arrayTateti, $simbolo)
{
    // int $cant, $ganadas, $i, 
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

/*11. */
/**
 * Explicación 3 - Inciso(11)
 * Implementar una función sin retorno que, dada una colección de juegos, muestre la colección de juegos
 *ordenado por el nombre del jugador cuyo símbolo es O
 * @param array $coleccionJuegos
 */
function coleccionJuegosO($coleccionJuegos)
{
    uasort($coleccionJuegos, 'sorteo');
    print_r($coleccionJuegos);
}
/**
 * Explicación módulo sorteo
 * se hace un módulo para comprar los strings de la funcion anterior para poder ordenar el array colecionJuegosO
 * @param array $a, $b
 * @return array
 */

function sorteo($a, $b)
{
    return strcmp($a["jugadorCirculo"], $b["jugadorCirculo"]);
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
// int $opciones, $nroJuegos, $numJuego, $juego, $puntosX, $puntosO, $ganados, $empatados, $juegosGanadosPorX, $juegosGanadosPorO
// array $juegosCargados, $tateti, $resumenJugador, $juegosAlmacenadosO
// string $mostrandoJuego, $respuestaUsuario, $nombreJugador, $ganadorX, $ganadorO, $simbolo, $simboloX, $simboloO, $jugador
// float $porcentajeX, $porcentajeO

//Inicialización de variables:

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
            $tateti = jugar();
            print_r($tateti);
            imprimirResultado($tateti);
            $juegosCargados = agregarJuego($juegosCargados, $tateti);
            break;
        case 2:
            // Muestra por pantalla datos de la colección de juegos
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
            // Muestra el porcentaje de juegos ganados según el símbolo elegido
            $simbolo = simboloXoY();

            $ganados = juegosGanados($juegosCargados);
            $empatados = $nroJuegos - $ganados;

            if ($simbolo == "X") {
                $juegosGanadosPorX = ganadosPorSimbolo($juegosCargados, $simbolo);
                $simboloO = "O";
                $juegosGanadosPorO = ganadosPorSimbolo($juegosCargados, $simboloO);
                $porcentajeX = ($juegosGanadosPorX * 100) / $ganados;
                echo "El porcentaje de los juegos ganados por X es: " . $porcentajeX . "%";
            } else {
                $juegosGanadosPorO = ganadosPorSimbolo($juegosCargados, $simbolo);
                $simboloX = "X";
                $juegosGanadosPorX = ganadosPorSimbolo($juegosCargados, $simboloX);
                $porcentajeO = ($juegosGanadosPorO * 100) / $ganados;
                echo "El porcentaje de los juegos ganados por O es: " . $porcentajeO . "%";
            }
            break;
        case 5:
            // Muestra el resumen de un jugador ingresado por el usuario
            echo "Ingrese un nombre de jugador: \n";
            $jugador = trim(fgets(STDIN));
            $resumenJugador = resumenJugador($juegosCargados, $jugador);

            echo "****************************************************************************\n";
            echo "Jugador: " . $resumenJugador["nombreJugador"] . "\n";
            echo "Ganó: " . $resumenJugador["juegosGanados"] . " juegos\n";
            echo "Perdió: " . $resumenJugador["juegosPerdidos"] . " juegos\n";
            echo "Empató: " . $resumenJugador["juegosEmpatados"] . " juegos\n";
            echo "Total de puntos acumulados: " . $resumenJugador["puntosTotales"] . " puntos\n";
            echo "****************************************************************************\n";

            break;
        case 6:
            // Muestra el listado de juegos ordenados por el Jugador O
            $juegosAlmacenadosO = coleccionJuegosO($juegosCargados);
            break;
        case 7:
            // Finaliza el Programa
            echo "Programa finalizado.";
            $opcion = 8;
            break;
    }
} while ($opciones != 7);
