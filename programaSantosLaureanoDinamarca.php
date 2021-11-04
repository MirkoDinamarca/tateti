<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/








/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
/*1. Implementar una función llamada cargarJuegos, que inicialice una estructura de datos con ejemplos de
juegos y que retorne la colección de juegos descripta en la sección EXPLICACION 2. Mínimo debe cargar
10 Juegos donde vayan variando los jugadores y los puntajes, en algunos casos los jugadores se deben
repetir. LISTO.

2. Para visualizar el menú de opciones (que siempre es el mismo), implementar una función
seleccionarOpcion que muestre las opciones del menú en la pantalla (ver sección EXPLICACION 1), le
solicite al usuario una opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta
que la opción sea válida), y retorne el número de la opción. La última opción del menú debe ser “Salir”. LISTO.

3. Implementar una función que solicite al usuario un número entre un rango de valores. Si el número
ingresado por el usuario no es válido, la función se encarga de volver a pedirlo. La función retorna un
número válido. LISTO.

4. Implementar una función que dado un juego, muestre en pantalla los datos del juego como lo indica la
sección EXPLICACIÓN 1.

5. Implementar una función agregarJuego cuya entrada en la colección de juegos y un juego, y la función
retorna la colección modificada al agregarse el nuevo juego.

6. Implementar una función que dada una colección de juegos y el nombre de un jugador, retorne el índice
del primer juego ganado por dicho jugador. Si el jugador no ganó ningún juego, la función debe retornar
el valor -1

7. Implementar una función que dada la colección de juegos y el nombre de un jugador, retorne el resumen
del jugador utilizando la estructura b) de la sección EXPLICACACIÓN 2.

8. Implementar una función sin parámetros formales que solicite al usuario un símbolo X o O, y retorne el
símbolo elegido. La función debe validar el datos ingresado por el usuario (Utilice funciones predefinidas
de string).

9. Implementar una función que dada una colección de juegos retorne la cantidad de juegos ganados (sin
importar si es X o O, es decir, algun jugador debe haber ganado, no debe haber empate.)

10. Implementar una función que dada una colección de juegos y un símbolo (X o O) retorne la cantidad de
juegos ganados por el símbolo ingresado por parámetro.

11. Implementar una función sin retorno que, dada una colección de juegos, muestre la colección de juegos
ordenado por el nombre del jugador cuyo símbolo es O.

12. Implementación del Programa Principal. Deberá seguir los siguientes pasos:
a. Precargar las estructuras de juegos.
b. Repetir el menú de opciones mientras la opción seleccionada no sea la opción Salir.
c. Cuando el usuario selecciona la opción del menú, debe invocar a la/s función/es necesarias.
Salvo algunas excepciones, debe contar con funciones con parámetros formales y retorno.
Asesorarse con la Cátedra para implementar las funciones correctamente de modo que los
resultados de las funciones puedan ser reusado.
d. Investigar la instrucción switch en el manual de PHP. ¿a qué tipo de estructura de control vista
en teoría corresponde? Escriba un comentario sobre la instrucción en el código fuente.

13. En el desarrollo utilizar funciones predefinida por PHP (strtolower, strtoupper, strlen, etc.). En la defensa
se le preguntará que funciones predefinidas utilizaron, qué hacen dichas funciones y para qué las
utilizaron.*/

//Declaración de variables:


//Inicialización de variables:


//Proceso:
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




/**2. Para visualizar el menú de opciones (que siempre es el mismo), implementar una función
seleccionarOpcion que muestre las opciones del menú en la pantalla (ver sección EXPLICACION 1), le
solicite al usuario una opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta
que la opción sea válida), y retorne el número de la opción. La última opción del menú debe ser “Salir”. LISTO. */
function seleccionarOpcion($opcion)
{
do{
        echo "¿Qué desea hacer?\n";
        echo "1) Jugar al tateti\n";
        echo "2) Mostrar un juego\n";
        echo "3) Mostrar el primer juego ganador\n";
        echo "4) Mostrar porcentaje de juegos ganados\n";
        echo "5) Mostrar resumen del Jugador\n";
        echo "6) Mostrar listado de juegos ordenador por Jugador O\n";
        echo "7) Salir\n";
        echo "Ingrese una opción: ";
        $opcion = trim(fgets(STDIN));
        if($opcion > 0 && $opcion < 8){

        switch ($opcion) {

            case 1:
                cargarJuegos();
                echo "1) Jugar al tateti\n";
                echo "Ingrese un número del 1 al 3";
                $coleccionJuegos = jugar();
                print_r($coleccionJuegos);
                imprimirResultado($coleccionJuegos);

                break;
            case 2:
                /**DUDA */
                $coleccionJuegos = jugar();
                echo "Ingrese el número de juego: ";
                $nroJuego= trim(fgets(STDIN));
                $nro = $coleccionJuegos[$nroJuego];
                /** Se crea la funcion mostrar juego */
                function mostrarJuego($nro){
                    echo "Juego TATETI:" .$nro;
                    echo "Jugador X: ";
                    echo "Jugador 0: ";
                }



                break;
            case 3:
                echo "3) Mostrar el primer juego ganador\n";
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
                echo "7) Salir\n";
                $opcion = 8;
                break;

            
        }
    }else{
            echo "Por favor, ingrese un número válido.";
        }

    
    }while ($opcion != 7);
}

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

/*4. Implementar una función que dado un juego, muestre en pantalla los datos del juego como lo indica la
sección EXPLICACIÓN 1.*/
function mostrarJuego($nro){
    echo "Juego TATETI:" .$nro;
    echo "Jugador X: ";
    echo "Jugador 0: ";
}

/*5. Implementar una función agregarJuego cuya entrada en la colección de juegos y un juego, y la función
retorna la colección modificada al agregarse el nuevo juego.*/


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