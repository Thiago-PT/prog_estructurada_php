<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manipulación de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>Función substr()</h2>
    <?php
    $cadena = "Hola mundo";
    echo substr($cadena, 5, 5); // Salida: mundo
    ?>

    <h2>Función ord()</h2>
    <?php
    $letra = "A";
    echo ord($letra); // Salida: 65
    ?>

    <h2>Función printf()</h2>
    <?php
    $nombre = "Juan";
    $edad = 25;
    printf("Nombre: %s, Edad: %d", $nombre, $edad);
    ?>

    <h2>Función sprintf()</h2>
    <?php
    $precio = 10.500;
    $texto = sprintf("El precio es: %.2f", $precio);
    echo $texto;
    ?>

    <h2>Función strtolower()</h2>
    <?php
    $mayus = "HOLA MUNDO";
    echo strtolower($mayus); // Salida: hola mundo
    ?>

    <h2>Función strtoupper()</h2>
    <?php
    $minus = "hola mundo";
    echo strtoupper($minus); // Salida: HOLA MUNDO
    ?>

    <h2>Función ereg()</h2>
    <?php
    // Obsoleta, solo para referencia histórica
    // if (ereg("mundo", "Hola mundo")) { echo "Encontrado"; }
    echo "Obsoleta, usar preg_match() en su lugar.";
    ?>

    <h2>Función eregi()</h2>
    <?php
    // Obsoleta, solo para referencia histórica
    // if (eregi("MUNDO", "Hola mundo")) { echo "Encontrado"; }
    echo "Obsoleta, usar preg_match() con 'i' para insensible a mayúsculas.";
    ?>
    
    <h2>Función preg_match()</h2>
    <p>Busca una expresión regular en una cadena. Devuelve 1 si hay coincidencia, 0 si no.</p>
    <?php
    $texto = "Hola mundo";
    if (preg_match("/mundo/", $texto)) {
        echo "Encontrado";
    } else {
        echo "No encontrado";
    }
    ?>

    <h2>Función preg_match() insensible a mayúsculas/minúsculas</h2>
    <p>Busca una expresión regular sin distinguir mayúsculas/minúsculas usando el modificador 'i'.</p>
    <?php
    $texto = "Hola mundo";
    if (preg_match("/MUNDO/i", $texto)) {
        echo "Encontrado";
    } else {
        echo "No encontrado";
    }
    ?>
    
</body>
</html>