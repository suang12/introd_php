<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>
    <?php
        // substr
        $cadena = "Hola, mundo";
        echo "substr: " . substr($cadena, 7, 5) . "<br>"; // mundo

        // ord
        $caracter = "H";
        echo "ord: " . ord($caracter) . "<br>"; // 72

        // printf
        $numero = 123;
        $texto = "El número es";
        printf("printf: %s %d<br>", $texto, $numero); // El número es 123

        // sprintf
        $formateado = sprintf("sprintf: %s %d<br>", $texto, $numero);
        echo $formateado; // El número es 123

        // strtolower
        $mayusculas = "HOLA MUNDO";
        echo "strtolower: " . strtolower($mayusculas) . "<br>"; // hola mundo

        // strtoupper
        $minusculas = "hola mundo";
        echo "strtoupper: " . strtoupper($minusculas) . "<br>"; // HOLA MUNDO

        // preg_match (en lugar de ereg)
        $patron = "/mundo/";
        if (preg_match($patron, $cadena)) {
            echo "preg_match: Se encontró 'mundo' en la cadena.<br>";
        } else {
            echo "preg_match: No se encontró 'mundo' en la cadena.<br>";
        }

        // preg_match (insensible a mayúsculas y minúsculas en lugar de eregi)
        $patron_i = "/MUNDO/i";
        if (preg_match($patron_i, $cadena)) {
            echo "preg_match (i): Se encontró 'MUNDO' (insensible) en la cadena.<br>";
        } else {
            echo "preg_match (i): No se encontró 'MUNDO' (insensible) en la cadena.<br>";
        }
    ?>
</body>
</html>