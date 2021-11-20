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
 * CORREO: laureano.luna@est.fi.uncoma.edu.ar 
 * GITHUB:LaureanoLuna
 */

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
/**
 * funciones predefinidas utilizadas:
 * strtoupper(): Convierte el string ingresado a mayúscula
 * uasort(): Se utiliza para Ordenar un array con una función de comparación definida por el usuario y mantiene la asociación de índices.
 * strcmp(): Hace una comparación entre dos strings
 * print_r(): Imprime información legible sobre una variable
 */
/**
 * Explicación 3 - Consigna (1)
 * Inicializa una estructura de datos que almacena 10 ejemplos de juegos, retorna la colección de juegos
 * @return array
 */

function cargarJuegos()
{
    $coleccionJuegos[0] = ["jugadorCruz" => "MIRKO", "jugadorCirculo" => "SERGIO", "puntosCruz" => 3, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz" => "MIRKO", "jugadorCirculo" => "SERGIO", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[2] = ["jugadorCruz" => "ALE", "jugadorCirculo" => "LAUREANO", "puntosCruz" =>  5, "puntosCirculo" => 0];
    $coleccionJuegos[3] = ["jugadorCruz" => "ALE", "jugadorCirculo" => "LAUREANO", "puntosCruz" =>  1, "puntosCirculo" => 1];
    $coleccionJuegos[4] = ["jugadorCruz" => "CLARA", "jugadorCirculo" => "SOFIA", "puntosCruz" =>  3, "puntosCirculo" => 0];
    $coleccionJuegos[5] = ["jugadorCruz" => "MIRKO", "jugadorCirculo" => "SERGIO", "puntosCruz" =>  5, "puntosCirculo" => 0];
    $coleccionJuegos[6] = ["jugadorCruz" => "SEBASTIAN", "jugadorCirculo" => "CARLOS", "puntosCruz" =>  1, "puntosCirculo" => 1];
    $coleccionJuegos[7] = ["jugadorCruz" => "DEBORA", "jugadorCirculo" => "GUSTAVO", "puntosCruz" =>  0, "puntosCirculo" => 4];
    $coleccionJuegos[8] = ["jugadorCruz" => "AGUSTIN", "jugadorCirculo" => "DAMIAN", "puntosCruz" =>  1, "puntosCirculo" => 1];
    $coleccionJuegos[9] = ["jugadorCruz" => "AGUSTIN", "jugadorCirculo" => "DAMIAN", "puntosCruz" =>  0, "puntosCirculo" => 5];

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
 * @return int
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
 * @param array $coleccion
 * @param int $nro
 * No retorna valor, solo muestra texto por pantalla
 */

function mostrarJuego($coleccion, $nro)
{
    // int $cant

    /* Inicialización de Variables */
    $cant = count($coleccion);

    //se condiciona a que nro se contenga dentro de la cantidad existente de la coleccion
    if ($nro < $cant && $nro > -1) {
        // Si es un empate..
        if ($coleccion[$nro]["puntosCruz"] == $coleccion[$nro]["puntosCirculo"]) {
            echo "*********************************\n";
            echo "Juego TATETI: " . $nro . " (empate)\n";
            echo "Jugador X: " . $coleccion[$nro]["jugadorCruz"] . " obtuvo " . $coleccion[$nro]["puntosCruz"] . " puntos\n";
            echo "Jugador O: " . $coleccion[$nro]["jugadorCirculo"] . " obtuvo " . $coleccion[$nro]["puntosCirculo"] . " puntos\n";
            echo "*********************************\n";
        } else if ($coleccion[$nro]["puntosCruz"] > $coleccion[$nro]["puntosCirculo"]) { // Si el jugador X gana el juego, entonces..
            echo "*********************************\n";
            echo "Juego TATETI: " . $nro . " (ganó X)\n";
            echo "Jugador X: " . $coleccion[$nro]["jugadorCruz"] . " obtuvo " . $coleccion[$nro]["puntosCruz"] . " puntos\n";
            echo "Jugador O: " . $coleccion[$nro]["jugadorCirculo"] . " obtuvo " . $coleccion[$nro]["puntosCirculo"] . " puntos\n";
            echo "*********************************\n";
        } else if ($coleccion[$nro]["puntosCruz"] < $coleccion[$nro]["puntosCirculo"]) { // Si el jugador O gana el juego, entonces..
            echo "*********************************\n";
            echo "Juego TATETI: " . $nro . " (ganó O)\n";
            echo "Jugador X: " . $coleccion[$nro]["jugadorCruz"] . " obtuvo " . $coleccion[$nro]["puntosCruz"] . " puntos\n";
            echo "Jugador O: " . $coleccion[$nro]["jugadorCirculo"] . " obtuvo " . $coleccion[$nro]["puntosCirculo"] . " puntos\n";
            echo "*********************************\n";
        }
    } else {
        echo "El Juego ingresado no existe.\n";
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
    // int $cant
    // array $coleccion

    /* Inicialización de Variables */
    $cant = count($coleccion);
    $coleccion[$cant] = $juegoNuevo;

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

            $respuesta = $i;
            $gano = false;
        } else if ($coleccion[$i]["jugadorCirculo"] == $nomb && $coleccion[$i]["puntosCirculo"] > $coleccion[$i]["puntosCruz"]) {
          
            $respuesta = $i;
            $gano = false;
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
 * @param array $coleccion
 * @param string $nombreJugador
 * @return array
 */

function resumenJugador($coleccion, $nombreJugador)
{
    /*
    int $juegosGanados, $juegosPerdidos, $juegosEmpatados, $puntosTotales, $i
        $cant, $puntosO, $puntosX
    string $jugadorX, $jugadorO
    array $resumen
    */

    /* Inicialización de Variables */
    $juegosGanados = 0;
    $juegosPerdidos = 0;
    $juegosEmpatados = 0;
    $puntosTotales = 0;
    $jugadorX = "";
    $jugadorO = "";
    $i = 0;
    $cant = count($coleccion);

    /* Inicio de Algoritmo */
    
    // Si el $nombreJugador coincide con algún nombre dentro del arreglo, entonces almacena dicho jugador.
    for ($i = 0; $i < $cant; $i++) {
        if ($nombreJugador == $coleccion[$i]["jugadorCruz"]) {
            $jugadorX = $nombreJugador;
        } else if ($nombreJugador == $coleccion[$i]["jugadorCirculo"]) {
            $jugadorO = $nombreJugador;
        }
    }
    // Se verifica si es jugadorX
    if ($nombreJugador == $jugadorX) {

        for ($i = 0; $i < $cant; $i++) {
            // Almacenamos los puntos, ya sea de X, u O
            $puntosX = $coleccion[$i]["puntosCruz"];
            $puntosO = $coleccion[$i]["puntosCirculo"];

            // Si el jugador de la colección de juegos coincide con $jugadorX
            if ($coleccion[$i]["jugadorCruz"] == $jugadorX) {
                //si sus puntos son mayor que jugadorCirculo
                if ($puntosX > $puntosO) {
                    $juegosGanados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                    // Si sus puntos son menores..
                } elseif ($puntosX < $puntosO) {
                    $juegosPerdidos++;
                    // Si sus puntos son iguales..
                } elseif ($puntosX == $puntosO) {
                    $juegosEmpatados++;
                    $puntosTotales = $puntosTotales + $puntosX;
                }
            }
            $resumen = [
                "nombreJugador" => $nombreJugador,
                "juegosGanados" => $juegosGanados,
                "juegosPerdidos" => $juegosPerdidos,
                "juegosEmpatados" => $juegosEmpatados,
                "puntosTotales" => $puntosTotales
            ];
        }
        // Se verifica si es jugadorO
    } elseif ($nombreJugador == $jugadorO) {
        for ($i = 0; $i < $cant; $i++) {
            // Almacenamos los puntos, ya sea de X, u O
            $puntosX = $coleccion[$i]["puntosCruz"];
            $puntosO = $coleccion[$i]["puntosCirculo"];

            // Si el jugador de la colección de juegos coincide con $jugadorO
            if ($coleccion[$i]["jugadorCirculo"] == $jugadorO) {
                //si sus puntos son mayor que jugadorCruz
                if ($puntosX < $puntosO) {
                    $juegosGanados++;
                    $puntosTotales = $puntosTotales + $puntosO;
                    // Si sus puntos son menores..
                } elseif ($puntosX > $puntosO) {
                    $juegosPerdidos++;
                    // Si sus puntos son iguales..
                } elseif ($puntosO == $puntosX) {
                    $juegosEmpatados++;
                    $puntosTotales = $puntosTotales + $puntosO;
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
    } else {
        $resumen = ["nombreJugador" => "inexistente"];
    }

    return $resumen;
}



/**
 * Explicación 3 - Inciso(8)
 * Le solicita al usuario un símbolo X u O, y retorna el símbolo
 * elegido, la función tiene que validar el dato ingresado por el usuario.
 * @return string
 */

function simboloXuO()
{
    // string $simbolo, $aux
    do {
        echo "Elija el símbolo a jugar (X / O): ";
        $simbolo = strtoupper(trim(fgets(STDIN)));
        $aux = "";

        if ($simbolo == "X" || $simbolo == "O") {
            $aux = $simbolo;
        } else {
            echo "Ingrese un símbolo válido.\n";
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
 * @param array $coleccion
 * @param string $simboloElegido
 * @return int 
 */

function ganadosPorSimbolo($coleccion, $simboloElegido)
{
    // int $cant, $ganadas, $i, 

    /* Inicialización de Variables */
    $ganadas = 0;
    $cant = count($coleccion);

    for ($i = 0; $i < $cant; $i++) {

        if ($simboloElegido == "X" && $coleccion[$i]["puntosCruz"] > $coleccion[$i]["puntosCirculo"]) {
            $ganadas++;
        } else if ($simboloElegido == "O" && $coleccion[$i]["puntosCirculo"] > $coleccion[$i]["puntosCruz"]) {
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

// Muestra un Menú de opciones que nos permite realizar distintas funciones, entre ellas, jugar al ta-te-ti

/** Declaración de variables: **/

// int $opciones, $nroJuegos, $numJuego, $indiceJuego, $puntosX, $puntosO, $ganados, $empatados, $juegosGanadosPorX, $juegosGanadosPorO
// array $juegosCargados, $tateti, $resumenJugador
// string $mostrandoJuego, $respuestaUsuario, $respuesta, $nombreJugador, $ganadorX, $ganadorO, $simbolo, $jugador
// float $porcentajeX, $porcentajeO

/** Variables Inicializadas: (No se necesitó inicializar ninguna variable dentro del Programa Principal) **/

//Proceso:
$juegosCargados = cargarJuegos(); // Carga la colección de juegos

do {
    $opciones = seleccionarOpcion(); // Menú de Opciones

    $nroJuegos = count($juegosCargados);
    /**Se utiliza un switch (que es una estructura de control alternativa) para definir que hacer 
     * en cada caso según el valor ingresado por el usuario */
    switch ($opciones) {
        case 1:
            // Comienza el juego del Tateti y se almacena cada juego nuevo en la colección ya iniciada.
            $tateti = jugar();
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
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            $indiceJuego = primerJuegoGanado($juegosCargados, $nombreJugador);
            if ($indiceJuego == -1) {
                echo $nombreJugador . " no ganó ningún juego.";
            } else {
                $ganadorX = $juegosCargados[$indiceJuego]["jugadorCruz"];
                $puntosX = $juegosCargados[$indiceJuego]["puntosCruz"];

                $ganadorO = $juegosCargados[$indiceJuego]["jugadorCirculo"];
                $puntosO = $juegosCargados[$indiceJuego]["puntosCirculo"];
                if ($puntosX > $puntosO) {
                    echo "****************************************************************************\n";
                    echo "Juego TATETI: " . $indiceJuego . " (ganó X)\n";
                    echo "Jugador X: " . strtoupper($ganadorX) . " obtuvo " . $puntosX . " puntos\n";
                    echo "Jugador O: " . strtoupper($ganadorO) . " obtuvo " . $puntosO . " puntos\n";
                    echo "****************************************************************************\n";
                } elseif ($puntosX < $puntosO) {
                    echo "****************************************************************************\n";
                    echo "Juego TATETI: " . $indiceJuego . " (ganó O)\n";
                    echo "Jugador O: " . strtoupper($ganadorO) . " obtuvo " . $puntosO . " puntos\n";
                    echo "Jugador X: " . strtoupper($ganadorX) . " obtuvo " . $puntosX . " puntos\n";
                    echo "****************************************************************************\n";
                }
            }
            break;
        case 4:
            // Muestra el porcentaje de juegos ganados según el símbolo elegido
            $simbolo = simboloXuO();

            $ganados = juegosGanados($juegosCargados);
            $empatados = $nroJuegos - $ganados;

            if ($simbolo == "X") {
                $juegosGanadosPorX = ganadosPorSimbolo($juegosCargados, $simbolo);
                $porcentajeX = ($juegosGanadosPorX * 100) / $ganados;
                echo "El porcentaje de los juegos ganados por X es: " . $porcentajeX . "% \n";
            } else {
                $juegosGanadosPorO = ganadosPorSimbolo($juegosCargados, $simbolo);
                $porcentajeO = ($juegosGanadosPorO * 100) / $ganados;
                echo "El porcentaje de los juegos ganados por O es: " . $porcentajeO . "% \n";
            }
            break;
        case 5:
            do {
                // Muestra el resumen de un jugador ingresado por el usuario
                echo "Ingrese un nombre de jugador: ";
                $jugador = strtoupper(trim(fgets(STDIN)));
                // Si el $nombreJugador coincide con algún nombre dentro del arreglo, entonces almacena dicho jugador.
                $resumenJugador = resumenJugador($juegosCargados, $jugador);
                if ($resumenJugador["nombreJugador"] != "inexistente") {
                    echo "****************************************************************************\n";
                    echo "Jugador: " . $resumenJugador["nombreJugador"] . "\n";
                    echo "Ganó: " . $resumenJugador["juegosGanados"] . " juegos\n";
                    echo "Perdió: " . $resumenJugador["juegosPerdidos"] . " juegos\n";
                    echo "Empató: " . $resumenJugador["juegosEmpatados"] . " juegos\n";
                    echo "Total de puntos acumulados: " . $resumenJugador["puntosTotales"] . " puntos\n";
                    echo "****************************************************************************\n";
                    $respuesta = "NO";
                } else {
                    echo "El jugador ingresado no existe. ¿Desea intentar nuevamente? (SI/NO): ";
                    $respuesta = strtoupper(trim(fgets(STDIN)));
                }
            } while ($respuesta == "SI");
            break;
        case 6:
            // Muestra el listado de juegos ordenados por el Jugador O
            coleccionJuegosO($juegosCargados);
            break;
        case 7:
            // Finaliza el Programa
            echo "Programa finalizado.";
            break;
    }
} while ($opciones != 7);
