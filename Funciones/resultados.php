<?php

    $EjercicioSeleccionado = $_POST['EjercicioSeleccionado'];

    switch ($EjercicioSeleccionado) {
        case 'Ejercicio1':
            Ejercicio_uno();
            break;
        case 'Ejercicio2':
            Ejercicio_dos();
            break;
        default:
            echo "Opcion ivalidad";
            break;
    }




    function Ejercicio_uno(){
        echo "Respuesta de la funcion del ejercicio Uno";
    }

    function Ejercicio_dos(){
        echo "Respuesta de la funcion del ejercicio DOS";
    }